<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;


class ShopController extends Controller
{
    public function index(Request $request)
    {
        $areas = Area::all();
        $genres = Genre::all();
        $query = Shop::with(['area', 'genre']);

        if ($request->filled('area')) {
            $query->where('area_id', $request->area);
        }

        if ($request->filled('genre')) {
            $query->where('genre_id', $request->genre);
        }

        if ($request->filled('shop_name')) {
            $query->where('name', 'like', '%' . $request->shop_name . '%');
        }

        $shops = $query->get();

        return view('index', compact('areas', 'genres', 'shops'));
    }
    // 飲食店詳細ページ表示
    public function detail(Shop $shop)
    {
        return view('detail', compact('shop'));
    }
    // 会員登録成功で、会員登録完了画面を表示
    public function thanks()
    {
        return view('thanks');
    }

    // 予約完了画面表示
    public function done()
    {
        return view('done');
    }

    // public function login()
    // {
    //     return view('auth.login');
    // }

    // public function register()
    // {
    //     return view('auth.register');
    // }

    public function aaa(Request $request)
    {
        $item = [
            'param1' => $request->room,
            'param2' => $request->id
        ];
        return view('aaa', $item);
    }

}