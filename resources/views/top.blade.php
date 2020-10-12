@extends('layouts.app')

@section('title', 'TOP')
@section('description', 'TOPページです。')
@section('keywords', 'TOPページ,PC買取,ピーシー買取')

@section('content')
<div class="p-site-width">
    <form class="p-form" method="post" action="">
        <h1 class="c-info-title">買取店検索</h1>
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

    <ul class="u-ul">
        <h1 class="c-info-title">最新買取店情報</h1>
        <list-item-component></list-item-component>
    </ul>
</div>

@endsection
