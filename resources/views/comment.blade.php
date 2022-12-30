<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comments</title>
</head>
<body>
    <h1>{{$posti[0]['User']}}</h1>
    <h2>{{$posti[0]['Post']}}</h2>
    <br>
    @foreach($comment as $each)
        <h3>{{$each['User_name']}}</h3>
        <h4>{{$each['comment']}}</h4>
    @endforeach

    <form action="">

        <input type="text" name="user" id='user' placeholder="user">

        <input type="text" name="comment" id='comment' placeholder="comment">

        <button  name="add" id='btn' >comment</button>

    </form>

    <script src="https://unpkg.com/axios/dist/axios.min.js">
        const userInput = document.getElementById("user");
        const commentInput = document.getElementById("comment");
        // const btn = document.getElementById("btn");
        btn.addEventListener("click", () => {
            const user = userInput.value;
            const comment = commentInput.value;

            axios.post("http://127.0.0.1:8000/post/{{{$posti[0]['id']}}}", {
                user: user,
                comment: comment
                })

                .then((response) => {
                    this.comment()
                console.log(response);
                
                })

                .catch(function (error) {
                console.log(error);
                });

            });


    </script>

</body>
</html>