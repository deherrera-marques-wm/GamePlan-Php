<!DOCTYPE html>
<html>
<head>
    <title>GamePlan</title>
    <link href="Styles_Index.css" type="text/css" rel="stylesheet">
    <link rel="icon" type="image/png" href="GamePlan_logo_2.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
        #signlogin {
            align-content: right;
            align-items: right;
            text-align: right;
              }
        #panels {
            margin-top: 250px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="profile.php">Profile</a></li>
            <li role="presentation"><a href="Ticket_Page.php">Events</a></li>
            <div id="signlogin">
                <button type="button" class="btn btn-default navbar-btn"><a href="loginPage.php"> Sign in</a></button>
                <button type="button" class="btn btn-default navbar-btn"><a href="createAccount.php"> Create Account</a></button>
            </div>
        </ul>


    </div>
</nav>

    <div id="Picture_Slider">
        <img src="GamePlan%20Pictures/GamePlan%201.jpg" id="image1" style="display: none;">
        <img src="GamePlan%20Pictures/GamePlan%202.png" id="image2" style="display: none;">
        <img src="GamePlan%20Pictures/GamePlan%203.jpg" id="image3" style="display: none;">
        <img src="GamePlan%20Pictures/GamePlan%204.jpg" id="image4" style="display: none;">
        <img src="GamePlan%20Pictures/GamePlan%205.png" id="image5" style="display: none;">
    </div>
<div id="Abouthead">
    <h1>About Us</h1>
</div>
<div class="row">
    <div id="panels">
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <div class="caption">
                <h3>Marques</h3>
                <p>One of the webdesigners and the scrum master of this awesome project.</p>
            </div>
        </div>
    </div>
</div>
</div>

<script src="jquery.js" type="text/javascript"></script>
<script src="Picture_Slider.js" type="text/javascript"></script>
</body>
</html>
<?php

?>