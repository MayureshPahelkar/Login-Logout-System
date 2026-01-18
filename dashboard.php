<?php

session_start();

if(!isset($_SESSION['user'])){
    header("Location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background:#dff9fb;
        }
        .box{
            width:400px;
            margin:120px auto;
            background:#fff;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 15px rgba(0,0,0,0.1);
            text-align:center;
        }
        a{
            display:inline-block;
            margin-top:20px;
            text-decoration:none;
            background:#e84118;
            color:white;
            padding:10px 20px;
            border-radius:5px;
        }
    </style>
</head>
<body>
     
        <div class="box">
            <h2>Welcome, <?php echo $_SESSION['user']; ?> 🎉 </h2>
             <p>You have successfully logged in.</p>
             <a href="logout.php">LogOut</a>
        </div>
  
</body>
</html>