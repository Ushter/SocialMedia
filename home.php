<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");

if (!isset($_SESSION['user_email'])) {
    header("location: index.php");
}
?>
<html>
<head>
    <?php
    $user = $_SESSION['user_email'];
    $get_user = "select * from users where user_email='$user'";
    $run_user = mysqli_query($con, $get_user);
    $row = mysqli_fetch_array($run_user);

    $user_name = $row['user_name'];
    ?>
    <title><?php echo "$user_name"; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<body>

<center>
    <div class="container">
        <form action="home.php?id=<?php echo $user_id; ?>" method="post" id="f" enctype="multipart/form-data">
            <label for="content">Post Update</label>
            <textarea class="form-control rounded-0" id="content" rows="4" name="content"
                      placeholder="What's in your mind?"></textarea>
            <br>
            <button id="btn-post" class="btn btn-success" name="sub">Post</button>
        </form>
        <?php insertPost(); ?>
    </div>
</center>

<hr>
<div class="row">
    <div class="col-sm-12">
        <h2>
            <strong>
                <center>
                    Posts
                </center>
            </strong>
        </h2>
        <hr style="width: 30%;">
        <?php echo get_posts(); ?>
    </div>
</div>
</body>
</html>