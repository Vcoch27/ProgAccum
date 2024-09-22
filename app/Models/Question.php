<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question_package_id',
        'question_text',
    ];
    use HasFactory;
    public function questionPackage(){
        return $this->belongsTo(QuestionPackage::class);
    }
    public function answers(){
        return $this->hasMany(Answer::class);
    }
}
