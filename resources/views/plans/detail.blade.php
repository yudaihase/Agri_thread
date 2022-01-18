<!DOCTYPE HTML>
<html lang="ja">

<head>

    <link rel="stylesheet" href="{{  asset('css/style.css') }}" />

</head>

<body>
<div class="center">

    <P>> <a href="{{ url('/')}}" class="detail_back">TOP</a>
        > <a href="{{ url('/plans/index')}}" class="detail_back">AGRI PLAN一覧</a></p>


    <div class="detail">
    <div class="detail_title">詳細</div>
    <table>
            <tr><th>投稿者</th><td>さん</td></tr>

            <tr><th>投稿日時</th><td>{{ $plans->created_at }}</td></tr>

            <tr><th>栽培予定地</th><td>{{ $plans->plan_location }}</td></tr>

            <tr><th>準備資金</th><td>{{ $plans->fund }}円</td></tr>

            <tr><th>耕地面積</th><td>{{ $plans->plan_area }}ha</td></tr>

            <tr><th>主な予定農作物</th><td>{{ $plans->plan_crop }}</td></tr>

            <tr><th>事業計画詳細</th><td>{!! nl2br(e( $plans->introduction )) !!}</td></tr>
    </table> 
    </div>


    <form method="POST" action="{{ route('comments.store') }}">
    @csrf

        <input type="hidden" name="plan_id" value="{{ $plans->id }}">
        <textarea rows="10" cols="100" name="comment"></textarea>
        <br>
        <input type="submit" value="コメントする">
    </form>
    
    @foreach($comments as $comment)
    <div class="answer_list">
        <p>さん</p>
        <p>{{ $comment->created_at }}</p>
        <p>{!! nl2br(e( $comment->comment )) !!}</p>
    </div>
    
                            
    @endforeach


    </div>
</body>
</html>