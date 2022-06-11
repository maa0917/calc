<!doctype html>
<html lang=ja>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calc</title>
</head>
<body>
<form action="{{ route('calc') }}" method="post">
    @csrf

    <input id="weight" type="number" min="0" step="0.1" name="weight" placeholder="体重 kg">

    <button>送信</button>
</form>

<p>体重：{{ $weight }}kg</p>

<h3>L-カルボシステイン</h3>
<p>1回{{ $carbocisteine }}mg、1日3回</p>
</body>
</html>
