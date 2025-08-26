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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('news_type');            // - ประเภทข่าว
            $table->string('title');                // - หัวข้อข่าว/เรื่อง
            $table->text('description');            // - คำอธิบาย  
            $table->dateTime('published_at');       // - วันที่เผยแพร่
            $table->string('topic_image_url');      // - ลิ้งรูปภาพ
            $table->text('content');                // - เนื้อหาข่าวทั้งหมด (html)
            $table->string('reference_url');        // - ลิ้งอ้างอิง
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
