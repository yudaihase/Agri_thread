<!DOCTYPE HTML>
<html lang="ja">

<head>

    <link rel="stylesheet" href="{{  asset('css/style.css') }}" />

</head>

<body>
<div class="center">

    <P>> <a href="{{ url('/')}}" class="detail_back">TOP</a>
        > <a href="{{ url('/questions/index')}}" class="detail_back">Q&A一覧</a></p>


    <div class="detail">
    <div class="detail_title">質問詳細</div>
        <p>さん</p>
        <p>{{ $questions->created_at }}</p>
        <p>{!! nl2br(e( $questions->post )) !!}</p>
    </div>


    <form method="POST" action="{{ route('answers.store') }}">
    @csrf

        <input type="hidden" name="question_id" value="{{ $questions->id }}">
        <textarea rows="10" cols="100" name="answer"></textarea>
        <br>
        <input type="submit" value="コメントする">
    </form>
    
    @foreach($answers as $answer)
    <div class="answer_list">
        <p>さん</p>
        <p>{{ $answer->created_at }}</p>
        <p>{!! nl2br(e( $answer->answer )) !!}</p>
    </div>
    
                            
    @endforeach


    </div>
</body>
</html>