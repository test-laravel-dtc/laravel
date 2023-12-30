<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>
<body>
    @foreach ($students as $item)
        <h1><a href="{{ route('students.show', ['student' => $item->id]) }}">{{ $item->name }}</a></h1>
    @endforeach
</body>
</html>
