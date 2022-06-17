<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
    <style>
        body{
             background-image:url('https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8am9ic3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=900&q=60');
            background-size: cover;
        }
        form{
            margin-top: 5em;
            margin-bottom: 3em;
            background-color:#fff;
            margin-right:30%;
            margin-left:30%;
            padding :30px;
            box-shadow:10px 10px 8px 10px blue;
        }
    </style>
</head>
<body>
<div class="content">
    <form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"name="password">
  <br>
  <button type="submit" class="btn btn-primary" name="Login">Login</button>
  <br>
  <br>
  New user?<a href="registration.php">  Sign Up</a>
</form>
</div>
</body>
</html>