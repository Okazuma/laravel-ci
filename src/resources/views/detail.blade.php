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
    <h1>Detail!!!</h1>

        @foreach($tests as $test)
        <p>{{$test->name}}</p>
        <p>{{$test->age}}</p>
        <p>{{$test->address}}</p>
        <p>{{$test->tel}}</p>
        @endforeach

        <a href="{{route('index')}}">戻る</a>

    
</body>
</html>