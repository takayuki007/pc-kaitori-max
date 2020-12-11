@extends('layouts.app')

@section('title', 'TOP')
@section('description', 'TOPページです。')
@section('keywords', 'TOPページ,PC買取,ピーシー買取')

@section('content')
<div class="p-site-width">
    <form class="p-form" method="post" action="{{ route('top.search')}}">
        @csrf
        <h1 class="c-info-title">買取店検索</h1>
        <div class="p-search-area">
            <table class="c-table">
                <tr class="c-tr">
                    <th class="c-th">エリア</th>
                    <td class="c-td">
                        <select name="area" class="c-search-select">
                            <option value="0" class="c-search-option">全て</option>
                            @foreach($areas as $area)
                                <option value="{{ $area->id }}" class="c-search-option" @if(old('area')== $area->id) selected  @endif>{{ $area->name }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr class="c-tr">
                    <th class="c-th">OS</th>
                    <td class="c-td">
                        <select name="os" class="c-search-select">
                            <option value="0" class="c-search-option">全て</option>
                            @foreach($oss as $os)
                                <option value="{{ $os->id }}" class="c-search-option" @if(old('os')== $os->id) selected  @endif>{{ $os->name }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
            </table>
            <input type="submit" class="c-btn" value="検索">
        </div>
    </form>

    <ul class="u-ul">
        <h1 class="c-info-title">最新買取店情報</h1>
        @foreach($relateShops as $relateShop)
            <list-item-component :name="{{ json_encode($relateShop->name) }}" img="{{ asset('/storage/shop_img/'.$relateShop->img) }}" shop-link="{{ route('shop.show', $relateShop->id)}}"></list-item-component>
        @endforeach
    </ul>
</div>

@endsection
