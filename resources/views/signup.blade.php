<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sign up</title>
    <style>
        *{
            text-align: center;
        }
    </style>
</head>
<body>
    <!--<form action="{{ url('/edit') }}" method="POST"> الطريقة العادية وفى طريقة بالاسم -->
        <form action="{{ route('delete') }}" method="POST" >
        @csrf
    name : <input type="text" placeholder="enter u name" name="myname" />
    <br><br>
    email : <input type="text" placeholder="enter u email" name="myemail" />
    <br><br>
    password : <input type="password" placeholder="enter u password"  name="mypassword" />
    <br><br>
    <button name="btn">sign up</button>
    </form>
</body>
</html>