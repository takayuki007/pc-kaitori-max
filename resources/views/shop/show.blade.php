@extends('layouts.app')

@section('title', '店舗詳細ページ')
@section('description', '店舗詳細ページです。')
@section('keywords', '店舗詳細ページ,PC買取,ピーシー買取')

@section('content')
<div class="p-site-width">
    <form class="p-form" method="post" action="">
        <h1 class="c-info-title">PC買取店A</h1>
        <div class="p-info-area">
            <div class="c-info-img">photo</div>
            <div class="c-info-wrapper">
                <p class="c-text">TEL: 03-0000-0000</p>
                <p class="c-text">営業時間: 10：00〜17：00</p>
                <p class="c-text">定休日: 毎週水曜日</p>
                <p class="c-text">所在地: 東京都港区南青山1ー1ー1</p>
                <p class="c-text">アクセス: 各線青山一丁目から徒歩10分</p>
                <input type="submit" class="c-btn" value="お気に入り">
            </div>
        </div>
    </form>

    <ul class="u-ul">
        <h1 class="c-info-title">同じ地域の買取店候補</h1>
        <li class="u-li">
            <div class="u-li-img">img</div>
            <a href="#" class="u-li-a">PC高価買取店B店</a>
        </li>
        <li class="u-li">
            <div class="u-li-img">img</div>
            <a href="#" class="u-li-a">PC高価買取店C店</a>
        </li>
    </ul>
</div>

@endsection
