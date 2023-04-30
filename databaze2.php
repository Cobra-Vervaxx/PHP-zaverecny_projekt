<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login-reset.css">
    <link rel="icon" type="image/x-icon" href="cobrafavicon.jpg">
    <meta name="popis"content="login strank, jmeno=cobra,heslo=topg">
    
    <title>Login</title>
</head>
<body>   
    <div class="login-card">
        <h2>Login</h2>
        <form class="login-form" method="post" action="">
            <input type="text" id="name" placeholder="Name" name="name"><br>
            <input type="password" id="password" placeholder="Password"name="password"><br>
            <a href="reset.html">Forgotten password</a><br>
            <button type="submit"name="sumbit">
        </form>
        <?php



if(isset($_POST['submit'])){
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_credentials";
$conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $username=$_POST['name'];
    $password=$_POST['password'];
    $sql = "SELECT * FROM logintable WHERE username='$username'AND heslo='$password'";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Welcome admin";
        }
    } else {
        echo "0 results";
    }
    
    $conn->close();
    




}
// Check connection


?>  
</div>
    

    

</body>
</html>

















