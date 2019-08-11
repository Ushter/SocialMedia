<!DOCTYPE html>
<html>
<head>
    <title>Hit Me UP!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    body {
        overflow-x: hidden;
        background-color: #1CD777;
    }

    .well {
        background-color: #1CD7C8;
    }
</style>

<body>
<div class="container">
    <br>
    <div class="well">
        <center>
            <h1 style="color: black;">Hit Me Up!</h1>
        </center>
    </div>
    <div class="form">
        <div class="header">
            <h3 style="text-align: center;">
                <strong>Log in !</strong>
            </h3>
            <hr>
        </div>
        <div class="body">
            <form action="" method="post">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="email" name="email" placeholder="Email" required="required"
                           class="form-control input-md"><br>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" name="pass" placeholder="Password" required="required"
                           class="form-control input-md">
                </div>
                <div class="overlap-text">
                    <br>
                    <a style="text-decoration:none;float: right;color: #187FAB;"
                       data-toggle="tooltip"
                       title="Guest" href="guest.php">Log in as Guest?</a>
                </div>
                <center>
                    <button id="signin" class="btn btn-info btn-lg" name="login">Login</button>
                    <a id="signup" class="btn btn-info btn-lg" href="signup.php">Sign up</a>
                </center>
                <?php include("login.php"); ?>
                <br>
            </form>
        </div>
    </div>
</div>
</body>
</html>