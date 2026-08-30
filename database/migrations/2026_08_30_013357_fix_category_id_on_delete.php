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
        Schema::table('posts', function (Blueprint $table) {
            // Удаляем старый foreign key
            $table->dropForeign(['category_id']);
            
            // Делаем category_id nullable
            $table->foreignId('category_id')->nullable()->change();
            
            // Создаем новый foreign key с set null
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->foreignId('category_id')->change();
        });
    }
};
