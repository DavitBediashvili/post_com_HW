<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    @foreach($postebi as $each)
        <h2>{{$each['User']}}</h2>
        <h3>{{$each['Post']}}</h3>
        <form method='POST'>
        @csrf
        <button  name="delete" value="{{$each['id']}}">delete</button>
        </form>
        <a href="{{ route('comment', ['id' => base64_encode($each['id'])])}}">See Comments</a>
    @endforeach

    <br>

    <form method='POST'>
        @csrf
        <input type="text" name="user"  placeholder="user">

        <input type="text" name="post" placeholder="post">

        <button  name="plus" value='va'>post</button>

    </form>
</body>
</html>