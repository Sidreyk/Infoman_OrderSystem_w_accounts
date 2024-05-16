<html>
    <head>
        <title>Food Shop</title>
     </head>

     <body>
    <form action="handleForm.php" method="POST"> 
        <p>USERNAME: <input type="text" placeholder="Enter username here" name="registerUsernameTextField" size="25"</p>
        <p>PASSWORD: <input type="password" placeholder="Enter password here" name="registerPasswordTextField" size="25"</p>
        <p><input type="submit" value="REGISTER" name="registerButton"></p>

    </form>
    <p><input type="submit" value="I already have an account" name="exitRegistere" onclick="location.href='login.php'"</p>
     </body>

</html>