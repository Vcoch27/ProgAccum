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
        Schema::create('user_attempts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Liên kết đến bảng users
            $table->foreignId('question_package_id')->constrained()->onDelete('cascade'); // Liên kết đến bảng question_packages
            $table->integer('score')->comment('Điểm số người dùng đạt được'); // Lưu điểm số
            $table->integer('total_questions')->comment('Tổng số câu hỏi trong lần làm bài này'); // Tổng số câu hỏi của lần làm bài
            $table->timestamp('attempted_at')->default(now())->comment('Thời gian làm bài'); // Thời gian bắt đầu làm bài
            $table->timestamps(); // Tạo thời gian tạo và cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_attempts');
    }
};
