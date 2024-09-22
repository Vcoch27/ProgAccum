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
        Schema::create('question_package_approvals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_package_id')->constrained('question_packages')->onDelete('cascade');
            $table->foreignId('approved_by')->constrained('users')->onDelete('cascade'); // Liên kết tới admin
            $table->enum('status', ['approved', 'rejected'])->default('approved');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_package_approvals');
    }
};
