<!DOCTYPE HTML>
<html lang="ja">

<head>

<link rel="stylesheet" href="{{  asset('css/style.css') }}" />

</head>

<body>
<div class="center">

    <P>> <a href="{{ url('/')}}" class="detail_back">TOP</a></p>

    <h1>Q&A</h1>
    
        <div>
        <a href="{{ url('/questions/create')}}" >
        <img class="questions1_image" src="{{ asset('/img/question1.png') }}" alt="トップ画像">
        </a>
        </div>
        
        @if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	    @endif

        @foreach($questions as $question)
        <div class="question_list">
            <p>{{ $question->category_id}}</p>
            <p><a href="{{ route('answers.show', $question->id) }}" class="question_text">{{ Str::limit($question->post, 45, '...') }}</a></p>
            <p>{{ $question->created_at }}</p>
        </div>
        @endforeach

    </div>

</body>
</html>

