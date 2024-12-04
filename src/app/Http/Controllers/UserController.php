<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function mypage()
    {
        $user = auth()->user();
        $likedShops = $user->likes;
        return view('mypage', compact('user','likedShops'));
    }
}
