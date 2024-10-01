<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionPackage extends Model
{
    use HasFactory;

    /**
     * Các thuộc tính có thể gán hàng loạt (mass assignable).
     *
     * @var array<int, string>
     */
    protected $fillable=[
        'title',
        'author_id',
        'upload_count',
        'question_count',
    ];
     /**
     * Mối quan hệ nhiều-nhiều với User thông qua author_id.
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
    
}
