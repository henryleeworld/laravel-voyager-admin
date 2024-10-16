<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('data_types', function (Blueprint $table) {
            $table->string('policy_name')->nullable()->after('model_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_types', function (Blueprint $table) {
            $table->dropColumn('policy_name');
        });
    }
};
