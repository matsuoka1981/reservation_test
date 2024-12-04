<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;        // Userモデルのインポート
use App\Models\Reservation; // Reservationモデルのインポート
use App\Models\Like;
use App\Models\Shop;


class FavoriteController extends Controller
{
    public function create(Request $request)
    {
        $request->validate(['shop_id' => 'required|exists:shops,id']);
        $user = auth()->user();
        $user->likes()->attach($request->shop_id);
        return redirect()->back();
    }

    public function delete(Request $request)
    {
        $request->validate(['shop_id' => 'required|exists:shops,id']);
        $user = auth()->user();
        $user->likes()->detach($request->shop_id);
        return redirect()->back();
    }
}
