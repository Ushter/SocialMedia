<?php
include("includes/connection.php");

if (isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];

    $run_delete = mysqli_query($con, "delete from posts where post_id='$post_id'");

    if ($run_delete === TRUE) {
        echo "<script> alert('Post deleted')</script>";
        echo "<script>window.open('home.php','_self')</script>";
    } else {
        echo "<script> alert('Could not delete post, please try again.')</script>";
        echo "<script>window.open('home.php','_self')</script>";
    }
}