<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

// フォームリクエスト設定後は消去する
use Illuminate\Support\Facades\Validator;

class RegisteredUserController extends Controller
{
    //会員登録画面のビューを作成
    public function create()
    {
        return view('auth.register');
    }

    // 会員登録処理とバリデーション
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            // 'password' => 'required|string|confirmed|min:8',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/thanks');
    }

}
