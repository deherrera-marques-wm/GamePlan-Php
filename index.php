<!DOCTYPE html>
<html>
<head>
    <title>GamePlan</title>
    <link href="Styles_Index.css" type="text/css" rel="stylesheet">
    <link rel="icon" type="image/png" href="GamePlan_logo_2.png">
</head>
<body>
<div id="Main">
    <div id="TopSpace">
        <!-- Nothing goes here this is just here to make is so I can have a margin on the <div id="Header"> -->
    </div>
    <div id="Header_Nav">
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
                //script for highlighting & reverting back to normal the Nav bar buttons
                function NavHighLight(special) {
                    special.style.backgroundColor = "#42CE41";
                    special.style.color = "#000000";
                }
                function NavUnHighlight(normal){
                    normal.style.backgroundColor = "#b01621";
                    normal.style.color = "#4a0780";
                }
            </script>
            <a href="index.php">
                <img id="Logo" src="GamePlan_logo_2.png" style="height: 80px; width: 116px;" alt="Logo" onmouseover="Highlight()" onmouseout="UnHighlight()">
            </a>
            <!-- Main Header should go here -->
            <div id="LoginArea" style="color: white;">
                <!-- This is where the Login and Username and SignUp with a new account will happen -->
                <a href="loginPage.php">
                    Login
                </a>
                <br>
                <a href="createAccount.php">
                    Sign Up
                </a>
            </div>
        </div>
        <div id="Navigation">
            <!-- everything navigation goes here (other than signing up and logging out and creating new accounts) -->
            <div id="control_nav">
                <a href="index.php"><div class="NavigationBox" onmouseover="NavHighLight(this)" onmouseout="NavUnHighlight(this)" style="float: left; margin-right: 3px; margin-left: 3px;"><h3 style="margin-top: 2px; text-align: center;">Home</h3></div></a>
                <a href="profile.php"><div class="NavigationBox" onmouseover="NavHighLight(this)" onmouseout="NavUnHighlight(this)" style="float: left; margin-right: 3px; margin-left: 3px;"><h3 style="margin-top: 2px; text-align: center;">Profile</h3></div></a>
                <a href="Ticket_Page.php"><div class="NavigationBox" onmouseover="NavHighLight(this)" onmouseout="NavUnHighlight(this)" style="float: left; margin-right: 3px; margin-left: 3px;"><h3 style="margin-top: 2px; text-align: center;">Buy Tickets</h3></div></a>
            </div>
        </div>
    </div>
    <!-- This is where everything inside the Main div will go that's not inside the header or navigation -->
    <div id="Picture_Slider">
        <img src="GamePlan%20Pictures/GamePlan%201.jpg" id="image1" style="display: none;">
        <img src="GamePlan%20Pictures/GamePlan%202.png" id="image2" style="display: none;">
        <img src="GamePlan%20Pictures/GamePlan%203.jpg" id="image3" style="display: none;">
        <img src="GamePlan%20Pictures/GamePlan%204.jpg" id="image4" style="display: none;">
        <img src="GamePlan%20Pictures/GamePlan%205.png" id="image5" style="display: none;">
    </div>
    <div id="Space_1"></div>
    <div id="Event_Info_Index">
        <h1 style="text-align: center;">Upcoming Events</h1>
        <ul style="text-align: center;">
            <a href="http://www.comic-con.org/">
                Comic-Con 2016
            </a>
            <p> Summer 2016 </p>
            <br>
            <a href="https://www.e3expo.com/">
                E3 Expo 2016
            </a>
            <p> June 12-14 </p>
            <br>
            <a href="http://www.gamescom-cologne.com/gamescom/index-9.php">
                GamesCom 2016
            </a>
            <p> Summer 2016 </p>
            <br>
            <a href="http://mineconcentral.com/">
                MineCon 2016
            </a>
            <p> Winter 2016 </p>
            <br>
            <a href="www.blizzcon.com/">
                BlizzCon 2016
            </a>
            <p> Fall 2016 </p>
        </ul>
    </div>
    <div id="AboutUs_Info_Index">
        <h1 style="text-align: center;">About Us</h1>
        <p style="text-align: center; font-size: 18px; margin-left: 4px; margin-right: 4px;">
            &nbsp&nbsp&nbsp Welcome to our game conference ticket distribution service. Many of the viewer who come on this site will not
            read this because they have better ways to spend their days, but if you're that lucky person who's reading
            this than you are awesome. We started off as lone coders but came together with a common goal, gaming conference
            selling. The team involves Marques, Nick, and Corbin. This site started in the year 1865 after the civil war it was a
            hard time, but gaming became popular and thus we invented this site. As the years went on our site grew to the popularity
            it is today. Thank you for coming and enjoying your cash... i mean enthusiasm for gaming with us.
        </p>
    </div>
    <div id="News_Info_Index">
        <h1 style="text-align: center;">News</h1>
        <ul style="text-align: center">
            <li>12/01 Project Start</li>
            <li>12/06 Index Page is Made</li>
            <li>12/11 Last Minute Rush</li>
        </ul>
    </div>
</div>
<script src="jquery.js" type="text/javascript"></script>
<script src="Picture_Slider.js" type="text/javascript"></script>
</body>
</html>
<?php

?>