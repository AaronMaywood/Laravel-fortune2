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
        Schema::create('career_fortunes', function (Blueprint $table)
            {
                $table->id();               // 誕生数としても使用する
                $table->string('name');     // キャラクター名
                $table->json('fortune');    // 占い内容（JSON形式）
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_fortunes');
    }
};