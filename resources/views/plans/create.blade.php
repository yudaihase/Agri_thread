<!DOCTYPE HTML>
<html lang="ja">

<head>

<link rel="stylesheet" href="{{  asset('css/style.css') }}" />

</head>

<body>
<div class="center">

    <h2>新規投稿</h2>

    <form method="POST" action="{{ route('plans.store') }}">
        @csrf

        </select>
    
                    <p>投稿内容</p>
                    <table>
                        
                    <tr><th>栽培予定地</th><td class="td-text-align">
                        <textarea rows="1" cols="50" name="plan_location" class="td-margin"></textarea></td></tr>

                    <tr><th>準備資金(円)</th><td class="td-text-align">
                        <textarea rows="1" cols="50" name="fund" class="td-margin"></textarea> 円</td></tr>

                    <tr><th>耕地面積(ha)</th><td class="td-text-align">
                        <textarea rows="1" cols="50" name="plan_area" class="td-margin"></textarea> ha</td></tr>

                    <tr><th>主な予定農作物</th><td class="td-text-align">
                        <textarea rows="1" cols="50" name="plan_crop" class="td-margin"></textarea></td></tr>

                    <tr><th>事業計画詳細</th><td class="td-text-align">
                        <textarea rows="10" cols="50" name="introduction" class="td-margin"></textarea></td></tr>

                    </table>
                    <br>
                    <input type="submit" value="投稿" class="submitStyle">
                    <br>
    </form>

                    <form method="GET" action="{{ route('plans.index') }}">
                    <br>
                    <input type="submit" value="キャンセル">
                    </form>

    </div>
</body>
</html>