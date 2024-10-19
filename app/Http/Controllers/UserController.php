<?php

namespace App\Http\Controllers;

use App\Models\QuestionPackage;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {

        if (!Auth::check()) {
            abort(401, 'Unauthorized');
        }
        $user = Auth::user();
        if ($user->role === 'user') {
            $packages = QuestionPackage::all();
            return view('client/pages/homepage', compact('packages'));
        } else {
            abort(401);
        }
    }
}
