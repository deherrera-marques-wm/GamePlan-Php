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
        #Goalsheader{
            text-align: center;
        }
        #signlogin {
            align-content: right;
            align-items: right;
            text-align: right;
              }
        #panels {
            margin-top: 175px;
			background-color: #EAEAEA;
			font-size: 12px;
			font-family: Georgia, "Times New Roman", Times, serif;
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
            margin-top: 0px;
            margin-left: 450px;
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
    <div id="panels">
    <div id="Abouthead">
    <h1>About Us</h1>
</div>
<div class="row">
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="8b242d4b1c536274d12e6e2b654d0ef3_200x200.jpg" width="200" height="200" title="test" alt="profile">
            <div class="caption">
                <h3>Marques</h3>
                <p>One of the webdesigners and the scrum master of this awesome project. He helped to
                design the outlook of GamePlan.</p>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <div class="caption">
                <h3>Nick</h3>
                <p>The Project Manager and leading man of this crew, Nick helped to establish the
                PHP server and databases for all the account information.</p>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <div class="caption">
                <h3>Corbin</h3>
                <p>The head designer, Corbin has helped to shape the look and design of the website of GamePlan.</p>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
        </div>
<div id="Goalsheader">
<div class="page-header">
    <h1>GamePlan<small> Goals</small></h1>
    </div>
    <p style="font-size: 18px; font-family: "Lucida Sans Unicode";">GamePlan is a one of a kind service that offers a new way to purchase event tickets. If your a huge
    comic book, game, or movie lover then you will find all your nerdy needs here. We deisgned this site to help anyone who
    wants tickets to those excluive events, like Comic-Con or E3.</p>
</div>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Back To The Top</p>
</footer>

<script src="jquery.js" type="text/javascript"></script>
<script src="Picture_Slider.js" type="text/javascript"></script>
</body>
</html>
