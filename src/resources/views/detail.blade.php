@extends('layouts/app')

@section('title', '店舗詳細画面')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}" />
@endsection

@section('content')
<div class="z">

    <!-- 店舗詳細エリア -->
    <div class="z-1">
        <div class="z-1-1">
            <a href="/">
                <div class="z-1-1-1">&lt;</div>
            </a>

            <div class="z-1-1-2">{{ $shop->name }}</div>
        </div>
        <div class="z-1-2">
            <img src="{{ $shop->image_url }}" />
        </div>
        <div class="z-1-3">{{'#'.$shop->area->name }} {{'#'.$shop->genre->name }}</div>
        <div class="z-1-4">
            {{ $shop->description }}
        </div>
    </div>


    <!-- 予約フォーム -->
    <div class="z-2">
        <div class="z-2-1">
            <div class="z-2-1-1">予約</div>

            <select name="" id="" class="z-2-1-2-1">
                <option value="">2021/04/01</option>
            </select>




            <select id="timeSelect" name="timeSelect" class="z-2-1-2-2">
                <?php
                for ($hour = 17; $hour < 23; $hour++) {
                    for ($minute = 0; $minute < 60; $minute += 30) {
                        $formattedTime = sprintf('%02d:%02d', $hour, $minute);
                        if ($hour == 22 && $minute == 30) {
                            continue;
                        }
                        echo "<option value=\" $formattedTime\">$formattedTime</option>";
                    }
                }
                // echo "<option value=\"22:00\">22:00</option>";
                ?>
            </select>






            <select id="numberOfPeople" name="numberOfPeople" class="z-2-1-2-3">
                <?php for ($i = 1; $i <= 30; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?>人</option>
                <?php endfor; ?>
            </select>






            <!-- <form class="z-2-1-2">
                <input type="text" class="z-2-1-2-1" value="2021/04/01" required>
                <input type="text" class="z-2-1-2-2" value="17:00" required>
                <input type="text" class="z-2-1-2-3" value="1人" required>
            </form> -->






            <div class="table__outer">
                <table class="z-2-1-3">
                    <tr>
                        <th>shop</th>
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
        <div class="z-2-2">予約する</div>
    </div>
</div>

@endsection