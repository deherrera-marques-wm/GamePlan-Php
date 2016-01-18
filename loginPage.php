<!DOCTYPE HTML>
<html>
<head>
    <title>Sign-In</title>
    <style>
        #login {
            align-content: center;
            text-align: center;
        }
    </style>
</head>
<body>
        <img src="GamePlan_logo_2.png" style="align-content: center; text-align: center; margin: auto" width="150" height="100">
        <form class="form-horizontal" role="form" id="login">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
</body>
</html>


