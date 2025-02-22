<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title> 
    <style> 
         body { 
            background: lightblue; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            margin: 0; 
            color: white; 
            
        } 
 
        form { 
            border: 2px solid white; 
            border-radius: 10px; 
            padding: 20px; 
            text-align: center; 
            width: 300px; 
        } 
 
        input, button { 
            width: 100%; 
            margin: 10px 0; 
            padding: 10px; 
            border-radius: 20px; 
            border: 1px solid white; 
            color: white; 
        } 
 
        button { 
            background: white; 
            color: black; 
        } 
 
        a { 
            color: white; 
            font-size: 14px; 
        } 
        </style> 
</head> 
 
<body> 
    <?php 
    if (isset($_POST['email'])) { 
 
        $email = $_POST['email']; 
        $password = $_POST['password']; 
        $connection = mysqli_connect(hostname: 'localhost', port: '3306', username: 'root', password: '', database: "quiz"); 
        $query = mysqli_query($connection, "insert into `users` (`email`,`password`) values('$email','$password')"); 
    } 
 
    ?> 
      <form action="index.php" method="post"> 
        <h1>Login</h1> 
        <input placeholder="Email ID" class="inputs" name="email" type="email" id="email"> 
        <input placeholder="Password" class="inputs" name="password" type="password" id="password"> 
        <div class="remember"> 
            <input type="checkbox" name="remember" id="remember"> 
            <label for="remember">remember me</label> 
            <a href="">Forget Password?</a> 
        </div> 
        <button type="submit" value="submit">Login</button> 
        <p>Don't have an account? <a style="font-weight: bold;" href="register.html">Register</a></p> 
        <?php 
        if (isset($_POST['email'])) { 
            if ((mysqli_affected_rows($connection)) > 0) { 
                echo '<h1>Registration successful! 
        </h1>'; 
                echo ""; 
            } else { 
                echo "Error: " . mysqli_error($connection); 
            } 
        } 
        ?> 
    </form> 
</body> 
 
</html> 



/////////////database///////////
<?php 
$connection = mysqli_connect(hostname: 'localhost', username: 
'root', password: '', port: '3306', database: 'quiz'); 
$query = mysqli_query($connection, "Select * from `users`"); 
$data = mysqli_fetch_all($query, 1); 
print_r($data); 
?> 
