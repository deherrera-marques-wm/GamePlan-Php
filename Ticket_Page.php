<!DOCTYPE html>
<html>
<head>
    <title>GamePlan Purchase Page</title>
    <link href="Styles_Index.css" type="text/css" rel="stylesheet">
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
            <a href="index.php"><div class="NavigationBox"><h3 style="margin-top: 2px; text-align: center;">Home</h3></div></a>
            <a href="profile.php"><div class="NavigationBox"><h3 style="margin-top: 2px; text-align: center;">Profile</h3></div></a>
            <a href="Ticket_Page.php"><div class="NavigationBox"><h3 style="margin-top: 2px; text-align: center;">Buy Tickets</h3></div></a>
            <a href=""><div class="NavigationBox"><h3 style="margin-top: 2px; text-align: center;"></h3></div></a>
            <a href=""><div class="NavigationBox"><h3 style="margin-top: 2px; text-align: center;"></h3></div></a>
            <a href=""><div class="NavigationBox"><h3 style="margin-top: 2px; text-align: center;"></h3></div></a>
        </div>
    </div>
    <div id="Name"></div>
    <div id="Ticket_Purchase_1">
        <p style="float: left; margin-top: 0">State where event is being held</p><br><br>
        <p style="float: left; margin-top: 0">Name of Event</p><input style="float: left; margin-top: 0" type="text" title="Name_of_Event"><br><br>
        <p style="float: left; margin-top: 0">Number of Tickets</p><input style="float: left; margin-top: 0" type="number" title="Number_of_Tickets"><br><br>
        <p style="float: left; margin-top: 0">Event Start Date</p><input style="float: left; margin-top: 0" type="date" title="Event_Start_Date"><br><br>
        <p style="float: left; margin-top: 0">Event End Date</p><input style="float: left; margin-top: 0" type="date" title="Event_End_Date"><br><br>
    </div>


</div>
</body>
</html>
<?php

?>
