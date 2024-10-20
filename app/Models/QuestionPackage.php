<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionPackage extends Model
{
    use HasFactory;

    /**
     * Tên bảng trong cơ sở dữ liệu.
     *
     * @var string
     */
    protected $table = 'question_packages';

    /**
     * Các thuộc tính có thể gán hàng loạt (mass assignable).
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'author_id',
        'question_count',
        'created_at',
        'updated_at',
        'images',
        'description',
        'rating',
        'attempt_count',
    ];

    /**
     * Các thuộc tính nên được kiểu dữ liệu (casts).
     *
     * @var array<string, string>
     */
    protected $casts = [
        'rating' => 'double',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Mối quan hệ belongs-to với model User thông qua author_id.
     * Lấy tác giả của gói câu hỏi.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Mối quan hệ một-nhiều với Question.
     * Lấy các câu hỏi trong gói câu hỏi này.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    /**
     * Mối quan hệ một-nhiều với QuestionPackageApproval.
     * Lấy thông tin phê duyệt cho gói câu hỏi này.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function approvals()
    {
        return $this->hasMany(QuestionPackageApproval::class);
    }
}
