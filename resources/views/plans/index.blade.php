<!DOCTYPE HTML>
<html lang="ja">

<head>

<link rel="stylesheet" href="{{  asset('css/style.css') }}" />

</head>

<body>
<div class="center">

    <div>
    <P>> <a href="{{ url('/')}}" class="detail_back">TOP</a></p>
    </div>

    <h1>AGRI PLANS</h1>

    <div>
    <form method="GET" action="{{ route('plans.create') }}">
    <input type="submit" value="事業計画を投稿する" class="btn-blue">
    </form>
    </div>

    <br />

    @foreach($plans as $plan)
    <table>
            <tr><th>投稿者</th><td>さん</td></tr>

            <tr><th>投稿日時</th><td>{{ $plan->created_at }}</td></tr>

            <tr><th>事業計画詳細</th><td>{{ Str::limit($plan->introduction, 13, '...') }}</td></tr>

            <td colspan="2" class="back_color">
            <a href="{{ route('comments.show', $plan->id) }}" class="question_text">詳細</a>
            </td>

    </table>
    <br />
        @endforeach

</div>

</body>
</html>