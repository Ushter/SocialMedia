<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
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

    .header {
        border: 0 solid #000;
        margin-bottom: 5px;
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
            <h3 style="text-align: center;"><strong>Join US</strong></h3>
            <hr>
        </div>
        <div class="body">
            <form action="" method="post">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                    <input type="text" class="form-control" placeholder="First Name" name="first_name"
                           required="required">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                    <input type="text" class="form-control" placeholder="Last Name" name="last_name"
                           required="required">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" placeholder="Password"
                           name="u_pass"
                           required="required">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="email" type="email" class="form-control" placeholder="Email" name="u_email"
                           required="required">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
                    <select class="form-control" name="u_country" required="required">
                        <option disabled>Select your Country</option>
                        <option>Pakistan</option>
                        <option>America</option>
                        <option>India</option>
                        <option>Japan</option>
                        <option>UK</option>
                        <option>France</option>
                        <option>Germany</option>
                        <option>Canada</option>
                    </select>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
                    <select class="form-control input-md" name="u_gender" required="required">
                        <option disabled>Select your Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Others</option>
                    </select>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    <input type="date" class="form-control input-md" placeholder="Email" name="u_birthday"
                           required="required">
                </div>
                <br>
                <center>
                    <button id="signup" class="btn btn-info btn-lg" name="sign_up">Signup</button>
                    <a class="btn btn-info btn-lg" href="index.php">Back</a>
                </center>
                <?php include("insert_user.php"); ?>
            </form>
        </div>
    </div>
</div>
<!--<img src="./images/hi.png" style="float : left"/>-->
</body>
</html>