<!DOCTYPE HTML>
<html lang="ja">

<head>
</head>



<body>

    <h2>新規投稿</h2>

         <select 
        id="category_id"
        name="category_id"
        class="form-control {{ $errors->has('category_id') ? 'is-invalid' : '' }}"
        value="{{ old('category_id') }}"
        >
        @foreach($question_categories as $id => $name)
        <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
        </select>

    <form method="POST" action="{{ route('questions.store') }}">
        @csrf
    
                    <p>質問文</p>
                    <textarea rows="10" cols="60" name="post"></textarea>
                    <input type="submit" value="投稿" class="submitStyle">
    </form>

    <form method="GET" action="{{ route('questions.index') }}">
    <input type="submit" value="キャンセル">
    </form>
                