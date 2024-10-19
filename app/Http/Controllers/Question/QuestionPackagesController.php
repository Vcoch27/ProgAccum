<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use App\Models\QuestionPackage;
use Illuminate\Http\Request;

class QuestionPackagesController extends Controller
{
    public function show($id)
    {
        $package = QuestionPackage::findOrFail($id);
        return view('client/pages/packages', compact('package'));
    }
}
