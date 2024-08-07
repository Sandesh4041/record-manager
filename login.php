

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
     
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
          
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .login-box {
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: center;
        }
        .login-box h1 {
            margin-bottom: 20px;
        }
        .login-box input[type="text"], .login-box input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-box input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
        }
        .login-box input[type="submit"]:hover {
            background-color: #45a049;
        }
.anchor{
    /* display: block; */
    width: 100%;
            padding: 8px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            text-decoration: none;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h1>Login</h1>
            <form action="php.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <div class="remember">
                    <input type="checkbox" name="remember">Remember me?
                </div>
                <input type="submit" name="submit" value="login" >
                
                <!-- <a href="front.php" class="anchor">login</a> -->
            </form>
        </div>
    </div>
    

</body>
</html>
