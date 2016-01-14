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

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="GamePlan%20Pictures/GamePlan%201.jpg" style="align-content: center" alt="Chania">
        </div>

        <div class="item">
            <img src="GamePlan%20Pictures/GamePlan%202.png" alt="Chania">
        </div

        <div class="item">
            <img src="GamePlan%20Pictures/GamePlan%203.jpg" alt="Flower">
        </div>

        <div class="item">
            <img src="GamePlan%20Pictures/GamePlan%204.jpg" alt="Flower">
        </div>
        </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div id="panels">
    <div id="Abouthead">
        <h1>About Us</h1>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="FullSizeRender.jpg" width="200" height="200" title="test" alt="profile">
                <div class="caption">
                    <h3 style="font-size: 30px">Marques</h3>
                    <p>One of the webdesigners and the scrum master of this awesome project. He helped to
                        design the outlook of GamePlan.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="Nick%20Clocksin.jpg" height="200px" width="200px">
                    <div class="caption">
                        <h3 style="font-size: 30px">Nick</h3>
                        <p>The Project Manager and leading man of this crew, Nick helped to establish the
                            PHP server and databases for all the account information.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <h3 style="font-size: 30px">Corbin</h3>
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
    <p style="font-size: 18px; font-family: Lucida Sans Unicode;">GamePlan is a one of a kind service that offers a new way to purchase event tickets. If your a huge
    comic book, game, or movie lover then you will find all your nerdy needs here. We deisgned this site to help anyone who
    wants tickets to those excluive events, like Comic-Con or E3.</p>
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
<script src="jquery.js" type="text/javascript"></script>
<script src="Picture_Slider.js" type="text/javascript"></script>
</body>
</html>
