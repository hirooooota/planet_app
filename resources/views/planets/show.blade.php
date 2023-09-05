<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>planet show</title>
</head>

<body>
    <h3>名前：{{ $planet->名前 }}</h3>
    <h3>名前(英語)：{{ $planet->英名 }}</h3>
    <h3>半径：{{ $planet->半径 }}</h3>
    <h3>重量：{{ $planet->重量 }}</h3>
    <a href="/planets">戻る</a>
</body>

</html>
