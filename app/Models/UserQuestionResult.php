<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserQuestionResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'question_package_id',
        'highest_score',
        'attempt_count',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function questionPackage(){
        return $this->belongsTo(QuestionPackage::class);
    }
}
