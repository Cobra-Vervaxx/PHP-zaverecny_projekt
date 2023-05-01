<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login-reset.css">
    <title>Login</title>
</head>
<body>   
    <div class="login-card">
        <h2>Login</h2>
        <form class="login-form" method="post" action="">
            <input type="text" id="name" placeholder="Name" name="name"><br>
            <input type="password" id="password" placeholder="Password" name="password"><br>
            <a href="reset.php">Forgotten password</a><br>
            <a href="newacc.php">Dont have account yet? Create one now</a><br>
            <button type="submit" name="submit" id="loginbutton">Submit</button>
        </form>
    </div>  
</body>
</html>
