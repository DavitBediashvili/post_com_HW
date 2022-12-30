<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin_comment</title>
</head>
<body>
    <h1>{{$posti[0]['User']}}</h1>
    <h2>{{$posti[0]['Post']}}</h2>
    <br>
    @foreach($comment as $each)
        <h3>{{$each['User_name']}}</h3>
        <h4>{{$each['comment']}}</h4>
        <form method='POST'>
        @csrf
        <button  name="delete_c" value="{{$each['id']}}">delete</button>
        </form>
    @endforeach
    
</body>
</html>