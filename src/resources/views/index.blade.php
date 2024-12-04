@extends('layouts.app')

@section('title', '店舗一覧画面')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('header_search')
<div class="header__search">
    <form class="header__search-form" action="/" method="get">
        @csrf
        <label for="area"></label>
        <select id="area" name="area" class="header__select-area">
            <option value="" selected>All area</option>
            @foreach($areas as $area)
            <option value="{{ $area->id }}" {{ request('area') == $area->id ? 'selected' : '' }}>
                {{ $area->name }}
            </option>
            <!-- <option value="">東京都</option>
            <option value="">大阪府</option>
            <option value="">福岡県</option> -->
            @endforeach
        </select>

        <div class="header__search-vertical-line"></div>
        <label for="genre"></label>
        <select class="header__select-genre" id="genre" name="genre">
            <option value="" selected>All genre</option>
            @foreach($genres as $genre)
            <option value="{{ $genre->id }}" {{ request('genre') == $genre->id ? 'selected' : '' }}>
                {{ $genre->name }}
            </option>
            <!-- <option value="">寿司</option>
            <option value="">焼肉</option>
            <option value="">居酒屋</option>
            <option value="">イタリアン</option>
            <option value="">ラーメン</option> -->
            @endforeach
        </select>

        <div class="header__search-vertical-line"></div>
        <button type="submit">検索</button>

        <input class="header__search-shop-name" type="text" name="shop_name" value="{{ request('shop_name') }}" placeholder="Search…">


    </form>
</div>
@endsection

@section('content')
<div class=" cards-wrap">

    @foreach($shops as $shop)

    <!-- カード1枚目 -->
    <div class="card">
        <div class="card__img">
            <img src="{{ $shop->image_url }}" />
        </div>
        <div class="card__content-wrap">
            <h2 class="card__shop-name">{{ $shop->name }}</h2>
            <div class="card__tag">{{'#'.$shop->area->name }} {{'#'.$shop->genre->name }}</div>
            <div class="card__button-heart-wrap">
                <div class="card__button">
                    <a href="/detail/{{ $shop->id }}">詳しくみる</a>
                </div>
                <div class="card__heart">

                    @php
                    $isLiked = auth()->user() ? $shop->likes()->where('user_id', auth()->id())->exists() : false;
                    @endphp

                    <form action="{{ $isLiked ? url('/favorite/delete') : url('/favorite') }}" method="POST">
                        @csrf
                        <input type="hidden" name="shop_id" value="{{ $shop->id }}">
                        <button type="submit" class="heart-button">
                            <span class="heart {{ $isLiked ? 'liked' : '' }}">❤️</span>
                        </button>
                    </form>


                </div>
            </div>
        </div>
    </div>


    @endforeach







    <!-- カード2枚目 -->
    <!-- <div class="card">
        <div class="card__img">
            <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg" />
        </div>
        <div class="card__content-wrap">
            <h2 class="card__shop-name">牛助</h2>
            <div class="card__tag">#大阪府 #焼肉</div>
            <div class="card__button-heart-wrap">
                <div class="card__button">
                    <a class="">詳しくみる</a>
                </div>
                <div class="card__heart"></div>
            </div>
        </div>
    </div> -->

    <!-- カード3枚目 -->
    <!-- <div class="card">
        <div class="card__img">
            <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg" />
        </div>
        <div class="card__content-wrap">
            <h2 class="card__shop-name">戦慄</h2>
            <div class="card__tag">#福岡県 #居酒屋</div>
            <div class="card__button-heart-wrap">
                <div class="card__button">
                    <a class="">詳しくみる</a>
                </div>
                <div class="card__heart"></div>
            </div>
        </div>
    </div> -->

    <!-- カード4枚目 -->
    <!-- <div class="card">
        <div class="card__img">
            <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg" />
        </div>
        <div class="card__content-wrap">
            <h2 class="card__shop-name">ルーク</h2>
            <div class="card__tag">#東京都 #イタリアン</div>
            <div class="card__button-heart-wrap">
                <div class="card__button">
                    <a class="">詳しくみる</a>
                </div>
                <div class="card__heart"></div>
            </div>
        </div>
    </div> -->

    <!-- カード5枚目 -->
    <!-- <div class="card">
        <div class="card__img">
            <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" />
        </div>
        <div class="card__content-wrap">
            <h2 class="card__shop-name">仙人</h2>
            <div class="card__tag">#東京都 #寿司</div>
            <div class="card__button-heart-wrap">
                <div class="card__button">
                    <a class="">詳しくみる</a>
                </div>
                <div class="card__heart"></div>
            </div>

        </div>
    </div> -->

    <!-- カード6枚目 -->
    <!-- <div class="card">
        <div class="card__img">
            <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg" />
        </div>
        <div class="card__content-wrap">
            <h2 class="card__shop-name">牛助</h2>
            <div class="card__tag">#大阪府 #焼肉</div>
            <div class="card__button-heart-wrap">
                <div class="card__button">
                    <a class="">詳しくみる</a>
                </div>
                <div class="card__heart"></div>
            </div>
        </div>
    </div> -->

    <!-- カード7枚目 -->
    <!-- <div class="card">
        <div class="card__img">
            <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg" />
        </div>
        <div class="card__content-wrap">
            <h2 class="card__shop-name">戦慄</h2>
            <div class="card__tag">#福岡県 #居酒屋</div>
            <div class="card__button-heart-wrap">
                <div class="card__button">
                    <a class="">詳しくみる</a>
                </div>
                <div class="card__heart"></div>
            </div>
        </div>
    </div> -->

    <!-- カード8枚目 -->
    <!-- <div class="card">
        <div class="card__img">
            <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg" />
        </div>
        <div class="card__content-wrap">
            <h2 class="card__shop-name">ルーク</h2>
            <div class="card__tag">#東京都 #イタリアン</div>
            <div class="card__button-heart-wrap">
                <div class="card__button">
                    <a class="">詳しくみる</a>
                </div>
                <div class="card__heart"></div>
            </div>
        </div>
    </div> -->


    <!-- @foreach($shops as $shop)
    <h2>{{ $shop->name }}</h2>
    <p>エリア: {{ $shop->area->name }}</p>
    <p>ジャンル: {{ $shop->genre->name }}</p>
    @endforeach -->



</div>





@endsection