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
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role',['admin','user','premium_user'])->default('user')->after('password');
            $table->integer('upload_quota')->default(0)->after('role');
            $table->enum('subscription_type', ['free', '1_month_premium', '1_year_premium'])->default('free')->after('upload_quota');
            $table->integer('max_attempts_per_day')->default(2)->after('subscription_type');
            $table->integer('daily_attempts')->default(0)->after('max_attempts_per_day');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'upload_quota', 'subscription_type', 'max_attempts_per_day', 'daily_attempts']);
        });
    }
};
