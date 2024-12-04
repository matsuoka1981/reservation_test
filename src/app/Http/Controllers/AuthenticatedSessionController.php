<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

// フォームリクエスト設定後は消去する
use Illuminate\Support\Facades\Validator;

class AuthenticatedSessionController extends Controller
{
    //ログイン画面のビューを作成
    public function create()
    {
        return view('auth.login');
    }

    // ログイン処理とバリデーション
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/mypage');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // ログアウト処理
    public function destroy(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }

}
