<!DOCTYPE html>
<html lang="en">
<head>
    <title>GamePlan Login</title>
    <link type="text/css" rel="stylesheet" href="loginStylesheet.css">
    <link rel="icon" type="image/png" href="GamePlan_logo_2.png">
</head>
<body>

<?php
/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = 'root';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=GamePlan", $username, $password);
    /*** echo a message saying we have connected ***/
    echo 'Connected to database<br />';

    /*** The SQL SELECT statement ***/
    $sql = "SELECT * FROM users";
    foreach ($dbh->query($sql) as $row)
    {
        print $row['firstName'] .' - '. $row['lastName'] . '<br />';
    }

    /*** close the database connection ***/
    $dbh = null;
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>
<a href="index.php">
    <img id="Logo" src="GamePlan_logo_2.png" style="height: 80px; width: 116px;" alt="Logo" onmouseover="Highlight()" onmouseout="UnHighlight()" height="1000" width="1000">
</a>
<form action="loginPage.php" id="login" method="post">
    <?php
    echo "First Name: ".$_POST['fName'];
    ?>
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