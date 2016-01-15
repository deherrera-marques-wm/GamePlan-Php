<!DOCTYPE html>
<html lang="en">
<head>
    <title>GamePlan Create</title>
    <link rel="stylesheet" type="text/css" href="create_stylesheet.css">
    <link rel="icon" type="image/png" href="GamePlan_logo_2.png">
</head>
<body>
<?php
try {
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=GamePlan', 'root', 'root');

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


if(@$_POST['formSubmit'] == "Submit")
{
    $errorMessage = "";

    if(empty($_POST['fName']))
    {
        $errorMessage = "<li>You forgot to enter your first name.</li>";
    }
    if(empty($_POST['lName']))
    {
        $errorMessage = "<li>You forgot to enter your last name.</li>";
    }
    if(empty($_POST['user']))
    {
        $errorMessage = "<li>You forgot to enter a username.</li>";
    }
    if(empty($_POST['password']))
    {
        $errorMessage = "<li>You forgot to enter a password</li>";
    }
    if(empty($_POST['address']))
    {
        $errorMessage = "<li>You forgot to enter your addresss</li>";
    }
    if(empty($_POST['city']))
    {
        $errorMessage = "<li>You forgot to enter your city</li>";
    }
    if(empty($_POST['state']))
    {
        $errorMessage = "<li>You forgot to enter your state</li>";
    }
    if(empty($_POST['zip']))
    {
        $errorMessage = "<li>You forgot to enter your zip code</li>";
    }
//        $varfirstName = $_POST['fName'];
//        $varlastName = $_POST['lName'];
//        $varuserName = $_POST['user'];
//        $varpassword = $_POST['password'];
//        $varaddress = $_POST['address'];
//        $varcity = $_POST['city'];
//        $varstate = $_POST['state'];
//        $varzip = $_POST['zip'];
//        $varapt = $_POST['apt'];


    $stmt = $dbh->prepare("INSERT INTO users (firstName, lastName, userName, password, phoneNum, email, address, city, state, zipCode, apt) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $result = $stmt->execute(array($_POST['fName'], $_POST['lName'], $_POST['user'], $_POST['password'], $_POST['phoneNum'], $_POST['email'], $_POST['address'], $_POST['city'], $_POST['state'], $_POST['zip'], $_POST['apt']));

    if(!$result){
        print_r($stmt->errorInfo());
    }

    if(!empty($errorMessage))
    {
        echo("<p>There was an error with your form:</p>");
        echo("<ul>" . $errorMessage . "</ul>\n");
    }

}

?>
<a href="index.php">
    <img id="Logo" src="GamePlan_logo_2.png" style="height: 80px; width: 116px;" alt="Logo" onmouseover="Highlight()" onmouseout="UnHighlight()" height="1000" width="1000">
</a>
<form id="info" action="createAccount.php" method="post">
    First Name:<input type="text"  name="fName" maxlength="255"><br>
    Last Name:<input type="text"  name="lName" maxlength="255"><br>
    Username:<input type="text" name="user" maxlength="45"><br>
    Password:<input type="password" name="password" maxlength="45"><br>
    Phone Number: <input type="number" name="phoneNum" maxlength="10"><br>
    Email:<input type="email" name="email" maxlength="45"><br>
    Address:<input type="text" name="address" maxlength="255"><br>
    City:<input type="text" name="city" maxlength="255"><br>
    State:<input type="text" name="state" maxlength="2"><br>
    Zip Code:<input type="number" name="zip" maxlength="5"><br>
    Apt:<input type="number" name="apt" maxlength="10"><br>
    <button type="submit" name="formSubmit" value="Submit">Submit</button>
</form>
</body>
</html>