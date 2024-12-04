@extends('layouts/app')

@section('title', 'マイページ')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}" />
@endsection

@section('content')
<div class="y-1">
    <h2>testさん</h2>
</div>

<!-- 予約状況とお気に入りをラップ -->
<div class="y-2">

    <!-- 予約状況コーナー全体wrap -->
    <div class="y-2-1">

        <!-- 予約状況タイトル -->
        <div class="y-2-1-1">
            <h3>予約状況</h3>
        </div>

        <!-- 予約状況カード複数をラップ -->
        <div class="y-2-1-2-wrap">

            <!-- 予約状況カードラップ -->
            <div class="y-2-1-2">

                <!-- カードタイトルと削除ボタンのラップ -->
                <div class="y-2-1-2-1">

                    <!-- カードタイトル -->
                    <div class="y-2-1-2-1-1">予約１</div>

                    <!-- 削除ボタン -->
                    <div class="y-2-1-2-1-2"></div>
                </div>

                <!-- テーブルアウター -->
                <div class="table__outer">

                    <!-- 予約内容テーブル -->
                    <table>
                        <tr>
                            <th>Shop</th>
                            <td>仙人</td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td>2021-04-01</td>
                        </tr>
                        <tr>
                            <th>Time</th>
                            <td>17:00</td>
                        </tr>
                        <tr>
                            <th>Number</th>
                            <td>1人</td>
                        </tr>
                    </table>
                </div>

            </div>

        </div>

    </div>


    <!-- お気に入りコーナー全体ラップ -->
    <div class="y-2-2">
        <!-- お気に入りタイトル -->
        <div class="y-2-2-1">
            <h3>お気に入り店舗</h3>
        </div>

        <!-- カード横並び設定 -->
        <div class="y-2-2-2">
        
            <!-- カード1枚目 -->
            <div class="y-2-2-2-1">
                <div class="y-2-2-2-1-1">
                    <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="">
                </div>

                <!-- カードの文字情報 -->
                <div class="y-2-2-2-1-2">

                    <!-- 店名 -->
                    <div class="y-2-2-2-1-2-1">
                        仙人
                    </div>

                    <!-- ハッシュタグ -->
                    <div class="y-2-2-2-1-2-2">
                        #東京都 #寿司
                    </div>

                    <!-- ボタンとハートマーク -->
                    <div class="card__button-heart-wrap">
                        <div class="y-2-2-2-1-2-3">
                            <a href="/detail">詳しくみる</a>
                        </div>
                        <div class="card__heart"></div>
                    </div>
                </div>
            </div>
            <!-- カード1枚目終わり -->

            <!-- カード2枚目 -->
            <div class="y-2-2-2-1">
                <div class="y-2-2-2-1-1">
                    <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg" alt="">
                </div>
                <div class="y-2-2-2-1-2">
                    <div class="y-2-2-2-1-2-1">
                        牛助
                    </div>
                    <div class="y-2-2-2-1-2-2">
                        #大阪府 #焼肉
                    </div>
                    <div class="card__button-heart-wrap">
                        <div class="y-2-2-2-1-2-3">
                            <a href="/detail">詳しくみる</a>
                        </div>
                        <div class="card__heart"></div>
                    </div>
                </div>
            </div>
            <!-- カード2枚目終わり -->

        </div>
    </div>
</div>
</div>

@endsection