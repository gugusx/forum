<?php

namespace App\Http\Controllers;

use App\forum;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(User $user)
    {
        $forums = forum::where('user_id', $user->id)->paginate(5);
        
        return view('profile.index', compact('user', 'forums'));
    }
}
