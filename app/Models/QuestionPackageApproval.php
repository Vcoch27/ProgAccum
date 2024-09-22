<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionPackageApproval extends Model
{
    use HasFactory;
    protected $fillable = [
        'question_package_id',
        'approved_by',
        'status',
    ];
    public function questionPackage()
    {
        return $this->belongsTo(QuestionPackage::class);
    }

    public function approver()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}
