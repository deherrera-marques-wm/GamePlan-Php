<!DOCTYPE html>
<html lang="en">
<head>
    <title>GamePlan Login</title>
    <link type="text/css" rel="stylesheet" href="loginStylesheet.css">
    <link rel="icon" type="image/png" href="GamePlan_logo_2.png">
</head>
<body>
<a href="index.php">
    <img id="Logo" src="GamePlan_logo_2.png" style="height: 80px; width: 116px;" alt="Logo" onmouseover="Highlight()" onmouseout="UnHighlight()" height="1000" width="1000">
</a>
<form action="loginPage.php" id="login" method="post">
    <br>
    Username<input type="text" id="user" maxlength="45">
    <br>
    Password<input type="password" id="password">
    <br>
    <button id="submit">Submit</button>
    <br>
    <p>Forgot Username/Password</p>
    <br>
    <a href="createAccount.php">
        <p>Create Account</p>
    </a>
</form>
</body>
</html>
<?php

?>