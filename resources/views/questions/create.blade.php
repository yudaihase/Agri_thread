<!DOCTYPE HTML>
<html lang="ja">

<head>

<link rel="stylesheet" href="{{  asset('css/style.css') }}" />

</head>

<body>
<div class="center">

    <h2>新規投稿</h2>

         

    <form method="POST" action="{{ route('questions.store') }}">
        @csrf

        <p>質問カテゴリ</p>
        <select 
        id="category_id"
        name="category_id"
        class="form-control {{ $errors->has('category_id') ? 'is-invalid' : '' }}"
        value="{{ old('category_id') }}"
        >

        @foreach($question_categories as $id => $category_name)
        <option value="{{ $id }}">{{ $category_name }}</option>
        @endforeach

        </select>
    
                    <p>投稿内容</p>
                    <textarea rows="10" cols="60" name="post"></textarea>
                    <br>
                    <input type="submit" value="投稿" class="submitStyle">
    </form>

    <form method="GET" action="{{ route('questions.index') }}">
    <br>
    <input type="submit" value="キャンセル">
    </form>

    </div>
</body>
</html>
                