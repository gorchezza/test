<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($users as $user)
        <ul>
            <li><a href="{{ route('show', $user->id) }}">{{ $user->first_name }} {{ $user->second_name }} {{ $user->third_name }}</a></li>
        </ul>
    @endforeach
</body>
</html>