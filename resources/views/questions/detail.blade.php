<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>詳細</title>

</head>

<body>

    <a href="{{ url('/questions/index')}}" >Q&A一覧へ戻る</a>

    <h1>詳細</h1>

    <p>さん</p>
    <p>{{ $questions->created_at }}</p>
    <p>{{ $questions->post }}</p>


    <form method="POST" action="{{ route('answers.store') }}">
    @csrf

        <input type="hidden" name="question_id" value="{{ $questions->id }}">
        <textarea rows="10" cols="60" name="answer"></textarea>
        <input type="submit" value="回答する">
    </form>
    
    @foreach($answers as $answer)
    <hr>
    <p>さん</p>
    <p>{{ $answer->created_at }}</p>
    <p>{{ $answer->answer }}</p>
    
                            
    @endforeach


</body>
</html>