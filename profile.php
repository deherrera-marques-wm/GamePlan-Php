<!DOCTYPE html>
<html>
<head>
    <title>GamePlan Profile</title>
    <link href="Styles_Index.css" type="text/css" rel="stylesheet">
    <link rel="icon" type="image/png" href="GamePlan_logo_2.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
    <style>
        #Goalsheader{
            text-align: center;
        }
        #signlogin {
            align-content: right;
            align-items: right;
            text-align: right;
        }
        #panels {
            margin-top: 325px;
            background-color: #EAEAEA;
            font-family: Georgia, "Times New Roman", Times, serif;
        }
        #panels > h3 {
            font-size: 75px;
        }
        #panels > p {
            font-size: 16px;
        }
        #Abouthead {
            text-align: center;
        }
        img {
            display: none
        }
        h3 {
            font-family: Elephant;
            text-align: center;
        }
        #Goalsheader > p {
            width: 500px;
            align-content: center;
            text-align: center;
            margin-left: 450px;
        }
    </style>
</head>

<body>
<div id="Main">
    <div id="TopSpace">
        <!-- Nothing goes here this is just here to make is so I can have a margin on the <div id="Header"> -->
    </div>
    <div id="Header_Nav">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <ul class="nav nav-tabs">
                    <li role="presentation"><a href="index.php">Home</a></li>
                    <li role="presentation" class="active"><a href="profile.php">Profile</a></li>
                    <li role="presentation"><a href="Ticket_Page.php">Events</a></li>
                    <div id="signlogin">
                        <button type="button" class="btn btn-default navbar-btn"><a href="loginPage.php"> Sign in</a></button>
                        <button type="button" class="btn btn-default navbar-btn"><a href="createAccount.php"> Create Account</a></button>
                    </div>
                </ul>
        <div id="Header">
            <!-- script link for highlight for picture and following header. -->
            <script>
                //for highlighting the GamePlan logo
                function Highlight() {
                    document.getElementById("Logo").style.opacity = "0.35";
                }
                function UnHighlight() {
                    document.getElementById("Logo").style.opacity = "1";
                }
            </script>
            <a href="index.php">
                <img id="Logo" src="GamePlan_logo_2.png" style="height: 80px; width: 116px;" alt="Logo" onmouseover="Highlight()" onmouseout="UnHighlight()">
            </a>
            <!-- Main Header should go here -->
        </div>
    </div>
    <div id="Name"></div>
    <!-- Actual page goes here -->
    <img src="GamePlan%20Pictures/Profile_page.jpg" style="margin-left: 25px; margin-top: 25px; float: left;">

    <div id="infoBox_Profile">
        <h2>First Name</h2>
        <h2>Last Name</h2>
        <h2>Address</h2>
    </div>
    <div id="description">
        <button onclick="prompt1()">Add a description for yourself</button><div id="bio1" style="margin-top: 5px; word-wrap: break-word"></div>
    </div>
    <h1 style="margin-top: 277px; margin-left: 25px;">Profile Name</h1>
            <p>IN BETA</p>
</div>
    <footer class="container-fluid text-center">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">GamePlan</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="Ticket_Page.php">Events</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <a href="#myPage" title="To Top">
                    <span href="#myCarousel" class="glyphicon glyphicon-chevron-up"></span>
                </a>
                <p href="#myCarousel">Back To The Top</p>
            </div>

        </nav>
    </footer>
</body>
</html>
<?php ?>