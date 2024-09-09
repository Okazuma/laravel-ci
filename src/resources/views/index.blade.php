<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(session('message'))
    {{session('message')}}
    @endif
    <h1>Hello World!</h1>
    <form class="" action="{{route('store')}}" method="post">
        @csrf
        <span>名前:</span><input type="text" name="name">
        <span>年齢:</span><input type="number" name="age">
        <span>住所:</span><input type="text" name="address">
        <span>電話:</span><input type="number" name="tel">
        <button type="submit">送信</button>

        


    </form>
</body>
</html>