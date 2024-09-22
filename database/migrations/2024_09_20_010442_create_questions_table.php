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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            //  bạn thiết lập một khóa ngoại (foreign key) với onDelete('cascade'), việc xóa một bản ghi trong bảng cha (parent table) sẽ tự động xóa các bản ghi liên quan trong bảng con (child table).
            $table->foreignId('question_package_id')->constrained('question_packages')->onDelete('cascade');
            $table->text('question_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
