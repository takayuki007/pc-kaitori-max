@extends('layouts.app')
@section('title', 'マイページ')
@section('description', 'マイページです。')
@section('keywords', 'マイページ,PC買取,ピーシー買取')

@section('content')
<div class="p-site-width">
    <div class="p-wrapper">
        <h1 class="c-title">マイページ</h1>
        <div class="p-wrapper">
            <ul class="u-ul">
                <h1 class="c-info-title">お気に入り店舗一覧</h1>
                @foreach($relateShops as $relateShop)
                    <list-item-component :name="{{ json_encode($relateShop->name) }}" img="{{ asset('/storage/shop_img/'.$relateShop->img) }}" shop-link="{{ route('shop.show', $relateShop->id)}}"></list-item-component>
                @endforeach
            </ul>

        </div>
    </div>
</div>
@endsection
