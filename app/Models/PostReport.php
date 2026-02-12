<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostReport extends Model
{
    protected $fillable = [
        'post_id',
        'reason',
        'contact',
        'description',
        'terms_accepted',
        'terms_accepted_at',
    ];

    protected $table = 'post_reports';

    protected $casts = ['terms_accepted' => 'boolean',
            'terms_accepted_at' => 'datetime',];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
