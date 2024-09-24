<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Các thuộc tính có thể gán hàng loạt:  mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_picture',
        'subscription_type',
        'upload_quota',
        'max_attempts_per_day',
        'daily_attempts',
        'role',
    ];

    /**
     * Các thuộc tính ẩn khỏi quá trình serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Các kiểu dữ liệu cần được ép kiểu.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Mối quan hệ một-nhiều với QuestionPackage.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

     public function questionPackages():HasMany{
        return $this->hasMany(QuestionPackage::class, 'author_id');
     }

     /**
     * Mối quan hệ một-nhiều với UserQuestionResult.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
     public function userQuestionResults()
    {
        return $this->hasMany(UserQuestionResult::class);
    }

    /**
     * Mối quan hệ nhiều-nhiều với chính bản thân User thông qua bảng user_followers.
     * Lấy danh sách người theo dõi (followers) của người dùng.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function followers()
    {
        return $this->belongsToMany(User::class, 'user_followers', 'user_id', 'follower_id');
    }

    /**
     * Mối quan hệ nhiều-nhiều với chính bản thân User thông qua bảng user_followers.
     * Lấy danh sách người mà người dùng đang theo dõi (following).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function following()
    {
        return $this->belongsToMany(User::class, 'user_followers', 'follower_id', 'user_id');
    }

    /**
     * Mối quan hệ một-nhiều với Notification.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    /**
     * Mối quan hệ một-nhiều với Subscription.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    /**
     * Mối quan hệ một-nhiều với QuestionPackageApproval thông qua trường approved_by.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function approvals()
    {
        return $this->hasMany(QuestionPackageApproval::class, 'approved_by');
    }

   
}
