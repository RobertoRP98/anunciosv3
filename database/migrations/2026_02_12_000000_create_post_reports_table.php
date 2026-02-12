<?php

use App\Models\Post;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('post_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Post::class)->constrained()->cascadeOnDelete();
            $table->enum('reason', [
                'Incumple politicas',
                'Trafico',
                'Datos falsos',
                'Contenido ofensivo',
                'Estafa o fraude',
                'Otro',
            ]);
            $table->text('contact')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('terms_accepted_at')->nullable();
            $table->boolean('terms_accepted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_reports');
    }
};
