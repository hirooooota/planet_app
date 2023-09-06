<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>planet edit</title>
</head>

<body>
    <h1>惑星情報編集</h1>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/planets/{{ $planet->id }}" method="post">
        @csrf
        @method('PATCH')
        <label for="名前">名前</label></th>
        <input type="string" name="名前" class="名前" value="{{ old('名前', $planet->名前) }}">
        <br><br>
        <label for="名前">名前(英語)</label>
        <input type="string" name="英名" class="英名" value="{{ old('英名', $planet->英名) }}">
        <br><br>
        <label for="半径">半径</label>
        <input type="number" name="半径" class="半径" value="{{ old('半径', $planet->半径) }}">
        <br><br>
        <label for="重量">重量</label>
        <input type="number" name="重量" class="重量" value="{{ old('重量', $planet->重量) }}">
        <br><br>
        <input type="submit" value="更新">
    </form><br>
    <a href="/planets">戻る</a>
</body>

</html>
