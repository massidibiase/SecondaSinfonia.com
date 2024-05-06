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
        Schema::table('insertions', function (Blueprint $table) {
            $table->boolean('is_accepted')->nullable()->after('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('insertions', function (Blueprint $table) {
            $table->dropColumn('is_accepted');
        });
    }
};
