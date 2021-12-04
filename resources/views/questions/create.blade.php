<!DOCTYPE HTML>
<html lang="ja">

<head>
</head>



<body>

    <h2>質問投稿</h2>

    <form method="POST" action="{{ route('questions.store') }}">
            @csrf
    
                    <p class='nameFlex'>質問文</p>
                    <textarea rows="10" cols="60" name="text"></textarea>
                    <input type="submit" value="投稿" class="submitStyle">

            </form>

    <form method="GET" action="{{ route('questions.index',) }}">

    <input type="submit" value="キャンセル">

    </form>
                