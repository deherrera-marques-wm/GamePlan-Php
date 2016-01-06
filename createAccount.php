<!DOCTYPE html>
<html lang="en">
<head>
    <title>GamePlan Create</title>
    <link rel="stylesheet" type="text/css" href="create_stylesheet.css">
    <link rel="icon" type="image/png" href="GamePlan_logo_2.png">
</head>
<body>
<div id="php">
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

        /*** INSERT data ***/
        $count = $dbh->exec("INSERT INTO users(firstName, lastName, address) VALUES ('Nick', 'troy', 'asiofnaoiefn')");

        /*** echo the number of affected rows ***/
        echo $count;

        /*** close the database connection ***/
        $dbh = null;
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

    print_r($_POST);
    ?>

</div>
<a href="index.php">
    <img id="Logo" src="GamePlan_logo_2.png" style="height: 80px; width: 116px;" alt="Logo" onmouseover="Highlight()" onmouseout="UnHighlight()" height="1000" width="1000">
</a>
<form id="info" name="createAccount" method="post">
    First Name:<input type="text" id="fName" name="fName"><br>
    Last Name:<input type="text" id="lName" name="lName"><br>
    Username:<input type="text" id="user"><br>
    Password:<input type="password" id="password"><br>
    Retype Password:<input type="password" id="rpassword"><br>
    Address 1:<input type="text" id="address1"><br>
    City:<input type="text" id="city1"><br>
    State:<input type="text" id="state1"><br>
    Zip Code:<input type="text" id="zip1"><br>
    Apt:<input type="text" id="apt1"><br>
    <button id="csubmit" type="submit">Submit</button>
</form>
</body>
</html>
<?php

?>