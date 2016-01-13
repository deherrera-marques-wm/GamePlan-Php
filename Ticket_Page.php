<!DOCTYPE html>
<html>
<head>
    <title>GamePlan Purchase Page</title>
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
                <a href="index.php"><div class="NavigationBox" style="float: left; margin-right: 3px; margin-left: 3px;"><h3 style="margin-top: 2px; text-align: center;">Home</h3></div></a>
                <a href="profile.php"><div class="NavigationBox" style="float: left; margin-right: 3px; margin-left: 3px;"><h3 style="margin-top: 2px; text-align: center;">Profile</h3></div></a>
                <a href="Ticket_Page.php"><div class="NavigationBox" style="float: left; margin-right: 3px; margin-left: 3px;"><h3 style="margin-top: 2px; text-align: center;">Buy Tickets</h3></div></a>
            </div>
        </div>
    </div>
    <script>
        var tickets = Number(document.getElementById("NumberTickets")).value;
            function funSubmitButton(){ //this function executes when the submit button is clicked
                tickets = Number(document.getElementById("NumberTickets").value);
                console.log(tickets);
                //makes sure tickets is a integer and not a negative number
                if(tickets <= 0){
                    //checks to see if tickets var is a fraction and negative
                    if (tickets%1 !== 0){
                        console.log("Failure: Number of tickets can't be a fraction and/or negative!");
                    }
                    else{
                        console.log("Failure: Number of tickets must be positive!");
                    }
                }
                //if the 'tickets' is positive
                else{
                    if (tickets%1 !== 0){
                        console.log("Failure: Number of tickets can't be a fraction!");
                    }
                    else{
                        console.log("Success!");
                        //execute the success code here
                        //for when the user buys tickets
                    }
                }
            }
    </script>
    <datalist id="name_event">
        <option value="Comicon">
        <option value="Minecon">
        <option value="Blizzcon">
        <option value="Gamescon">
    </datalist>
    <div id="Name"></div>
    <div id="Ticket_Purchase_1">
        <p style="float: left; margin-top: 0">State where event is being held</p><br><br>
        <p style="float: left; margin-top: 0">Name of Event</p><input style="float: left; margin-top: 0" type="text" list="name_event" title="Name_of_Event"><br><br>
        <p style="float: left; margin-top: 0">Number of Tickets</p><input style="float: left; margin-top: 0" id="NumberTickets" type="number" title="Number_of_Tickets"><br><br>
        <p style="float: left; margin-top: 0">Event Start Date</p><input style="float: left; margin-top: 0" type="date" title="Event_Start_Date"><br><br>
        <p style="float: left; margin-top: 0">Event End Date</p><input style="float: left; margin-top: 0" type="date" title="Event_End_Date"><br><br>
        <button type="button" onclick="funSubmitButton()">Take my Money and give me tickets(a.k.a. submit)!</button>
    </div>
</div>
</body>
</html>
<?php

?>
