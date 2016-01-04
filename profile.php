<!DOCTYPE html>
<html>
<head>
    <title>GamePlan Profile</title>
    <link href="Styles_Index.css" type="text/css" rel="stylesheet">
    <link rel="icon" type="image/png" href="GamePlan_logo_2.png">
    <script type="text/javascript" src="scripts.js"></script>
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
            </script>
            <a href="index.php">
                <img id="Logo" src="GamePlan_logo_2.png" style="height: 80px; width: 116px;" alt="Logo" onmouseover="Highlight()" onmouseout="UnHighlight()">
            </a>
            <!-- Main Header should go here -->
        </div>
        <div id="Navigation">
            <!-- everything navigation goes here (other than signing up and logging out and creating new accounts) -->
            <a href="index.php"><div class="NavigationBox"><h3 style="margin-top: 2px; text-align: center;">Home</h3></div></a>
            <a href="profile.php"><div class="NavigationBox"><h3 style="margin-top: 2px; text-align: center;">Profile</h3></div></a>
            <a href="Ticket_Page.php"><div class="NavigationBox"><h3 style="margin-top: 2px; text-align: center;">Buy Tickets</h3></div></a>
            <a href=""><div class="NavigationBox"><h3 style="margin-top: 2px; text-align: center;"></h3></div></a>
            <a href=""><div class="NavigationBox"><h3 style="margin-top: 2px; text-align: center;"></h3></div></a>
            <a href=""><div class="NavigationBox"><h3 style="margin-top: 2px; text-align: center;"></h3></div></a>
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
        <button onclick="prompt1()">Add a description</button><div id="bio1" style="margin-top: 5px;"></div>
    </div>
    <h1 style="margin-top: 277px; margin-left: 25px;">Profile Name</h1>
</div>
</body>
</html>
<?php

?>