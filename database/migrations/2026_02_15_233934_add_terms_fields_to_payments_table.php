<?php

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
        Schema::table('payments', function (Blueprint $table) {

            // Solo las agregamos si no existen para evitar errores
            if (!Schema::hasColumn('payments', 'terms_accepted')) {
                $table->boolean('terms_accepted')->default(false)->after('payload');
            }
            if (!Schema::hasColumn('payments', 'terms_accepted_at')) {
                $table->timestamp('terms_accepted_at')->nullable()->after('terms_accepted');
            }
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payments', function (Blueprint $table) {
            Schema::table('payments', function (Blueprint $table) {
            $table->dropColumn(['terms_accepted', 'terms_accepted_at']);
        });
            
        });
    }
};
