<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>planet create</title>
</head>

<body>
    <h1>惑星情報登録</h1>
    <form action="/planets" method="post">
        @csrf
        <table>
            <label for="名前">名前</label></th>
            <input type="string" name="名前" class="名前"></td>
            <br><br>
            <label for="名前">名前(英語)</label>
            <input type="string" name="英名" class="英名">
            <br><br>
            <label for="半径">半径</label>
            <input type="number" name="半径" class="半径">
            <br><br>
            <label for="重量">重量</label>
            <input type="number" name="重量" class="重量">
            <br><br>
            <input type="submit" value="登録">
    </form><br>
    <a href="/planets">戻る</a>
</body>

</html>
