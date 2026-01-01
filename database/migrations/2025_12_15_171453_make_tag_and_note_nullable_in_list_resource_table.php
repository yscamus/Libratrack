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
        Schema::table('list_resource', function (Blueprint $table) {
            $table->text('personal_note')->nullable()->change();
            $table->unsignedBigInteger('tag_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('list_resource', function (Blueprint $table) {
            $table->text('personal_note')->nullable(false)->change();
            $table->unsignedBigInteger('tag_id')->nullable(false)->change();
        });
    }
};
