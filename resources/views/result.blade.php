@extends('layouts.app')

@section('title', '検索結果')
@section('description', '検索結果ページです。')
@section('keywords', '検索結果ページ,PC買取,ピーシー買取')

@section('content')
<div class="p-site-width">
    <form class="p-form" method="post" action="">
        <h1 class="c-info-title">買取店舗情報</h1>
        <div class="p-search-area">
            <table class="c-table">
                <tr class="c-tr">
                    <th class="c-th">エリア</th>
                    <td class="c-td">
                        <select name="area" class="c-search-select">
                            <option value="" class="c-search-option">選択してください。</option>
                            <option value="" class="c-search-option">東京</option>
                            <option value="" class="c-search-option">大阪</option>
                            <option value="" class="c-search-option">名古屋</option>
                        </select>
                    </td>
                </tr>
                <tr class="c-tr">
                    <th class="c-th">OS</th>
                    <td class="c-td">
                        <select name="os" class="c-search-select">
                            <option value="" class="c-search-option">選択してください。</option>
                            <option value="" class="c-search-option">Windows</option>
                            <option value="" class="c-search-option">Mac</option>
                        </select>
                    </td>
                </tr>
            </table>
            <input type="submit" class="c-btn" value="検索">
        </div>
    </form>

    <div class="p-count-area">
        <span class="c-text">1000件の買取店があります。</span><span class="c-text">1000件中　1ー20件を表示</span>
    </div>

    <ul class="u-ul">
        <h1 class="c-info-title">買取店候補一覧</h1>
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
