<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    @foreach($postebi as $each)
        <h2>{{$each['User']}}</h2>
        <h3>{{$each['Post']}}</h3>
        <a href="{{ route('post', ['id' => base64_encode($each['id'])])}}">See Comments</a>
    @endforeach
    
</body>
</html>