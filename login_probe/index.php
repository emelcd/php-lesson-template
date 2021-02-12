<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginTest</title>
</head>

<body style="text-align:center; width:fit-content; margin: 2rem auto;" >
    <h1>LOGIN</h1>
    <form action="check_user.php" method="post">
        
        <input type="text" name="user" id="user" required>
        <input type="password" name="password" id="password" required>
        <input type="submit" value="CHECK USER">
        
    </form>
</body>
<form style="float:left;margin: 2rem auto;"action="create_user.php" method="post">
    <input type="text" name="newUser" id="newUser">
    <input type="password" name="newPassword" id="newPassword" required>
    <input type="submit" value="SIGN UP">
</form>
<form action="finish.php">
    <input type="submit" value="BORRA">
</form>
</html>