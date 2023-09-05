<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>planes index</title>
</head>

<body>
    <h1>惑星一覧</h1>
    <table border="1">
        <tr>
            <th>名前</th>
            <th>名前(英語)</th>
            <th>半径</th>
            <th>重量</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        @foreach ($planets as $planet)
            <tr>
                <td>{{ $planet->名前 }}</td>
                <td>{{ $planet->英名 }}</td>
                <td>{{ $planet->半径 }}</td>
                <td>{{ $planet->重量 }}</td>
                <td><a href="">詳細</a></td>
                <td><a href="">編集</a></td>
                <td><button>削除する</button></td>
            </tr>
        @endforeach
    </table>
    <a href="/planets/create">新規登録</a>
</body>

</html>
