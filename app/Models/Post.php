<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = [
        'title',
        'description',
        'start',
        'end',
        'slug',
        'views',
        'active',
        'is_premium',
        'status',
        'user_id',
        'category_id',
        'state_id',
        'municipio_id',
        'plan_id',
        'phone',
    ];

    public function user(): BelongsTo
    {
        return  $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->BelongsTo(Category::class);
    }

    public function state(): BelongsTo
    {
        return $this->BelongsTo(State::class);
    }

    public function municipio(): BelongsTo
    {
        return $this->BelongsTo(Municipio::class);
    }

    public function plan(): BelongsTo
    {
        return $this->BelongsTo(Plan::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $casts = ['active' => 'boolean', 'is_premium' => 'boolean', 'start' => 'datetime', 'end' => 'datetime'];


     protected $appends = ['status_label', 'start_label', 'end_label'];

    public function getStatusLabelAttribute(): string
    {
        return match ($this->status) {
            'pending' => 'Pendiente',
            'active' => 'Activo',
            'expired' => 'Vencido',
            default => strtoupper($this->status),
        };
    }

    public function getStartLabelAttribute(): string
    {
        return $this->start ? $this->start->format('d/m/Y, H:i') : '-';
    }

    public function getEndLabelAttribute(): string
    {
        return $this->end ? $this->end->format('d/m/Y, H:i') : '-';
    }
}
