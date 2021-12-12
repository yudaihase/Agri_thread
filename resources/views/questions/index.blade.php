<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Q&A</title>

</head>

<style>

.questions1_image {
                  width:100;
                  height:50;
            }
</style>

<body>

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
                    <hr>
                    <p><a href="{{ route('answers.show', $question->id) }}">{{ $question->post }}</a></p>
                    <p>{{ $question->created_at }}</p>
                    <p></p>
        @endforeach


</body>
</html>

