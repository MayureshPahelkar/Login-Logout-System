<?php

session_start();

$error="";

if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    if($username=="admin" && $password=="admin123"){
        $_SESSION['user']=$username;
        header("Location:   dashboard.php");
    }else{
        $error = "❌ Invalid Username or Password";
    }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
     <style>
        body{
            font-family: Arial, sans-serif;
            background:#f1f2f6;
        }
        .box{
            width:350px;
            margin:100px auto;
            background:#fff;
            padding:25px;
            border-radius:10px;
            box-shadow:0 0 15px rgba(0,0,0,0.1);
            text-align:center;
        }
        input{
            width:100%;
            padding:10px;
            margin:10px 0;
            border:1px solid #ccc;
            border-radius:5px;
        }
        button{
            width:100%;
            padding:10px;
            background:#40739e;
            color:#fff;
            border:none;
            border-radius:5px;
            font-size:16px;
            cursor:pointer;
        }
        p{
            margin-top:15px;
            color:red;
            font-weight:bold;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Login</h2>
        <form method="POST" action="">
            <input type="text" name="username"  placeholder="username">
            <input type="password" name="password"  placeholder="password">
            <button type="submit" name="login">Login</button>
        </form>

        <p><?php echo $error; ?></p>
    </div>
</body>
</html>