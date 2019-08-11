<?php

include("includes/connection.php");

//function for inserting post

function insertPost()
{
    if (isset($_POST['sub'])) {
        global $con;
        global $user_id;

        $content = htmlentities($_POST['content']);

        $random_number = rand(1, 100);

        if (strlen($content) > 250) {
            echo "<script>alert('Please Use 250 or less than 250 words!')</script>";
            echo "<script>window.open('home.php', '_self')</script>";
        } else {
            if ($content == '') {
                move_uploaded_file($image_tmp, "imagepost/$upload_image.$random_number");
                $insert = "insert into posts (user_id,post_content,upload_image) values ('$user_id','No','$upload_image.$random_number')";
                $run = mysqli_query($con, $insert);

                if ($run) {
                    echo "<script>alert('Your Post updated a moment ago!')</script>";
                    echo "<script>window.open('home.php', '_self')</script>";

                    $update = "update users set posts='yes' where user_id='$user_id'";
                    $run_update = mysqli_query($con, $update);
                }

                exit();
            } else {
                $insert = "insert into posts (user_id, post_content) values('$user_id', '$content')";
                $run = mysqli_query($con, $insert);

                if ($run) {
                    echo "<script>alert('Your Post updated a moment ago!')</script>";
                    echo "<script>window.open('home.php', '_self')</script>";

                    $update = "update users set posts='yes' where user_id='$user_id'";
                    $run_update = mysqli_query($con, $update);
                }
            }
        }
    }
}

function get_posts()
{
    global $con;
    $per_page = 4;

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $start_from = ($page - 1) * $per_page;

    $get_posts = "select * from posts ORDER by 1 DESC LIMIT $start_from, $per_page";

    $run_posts = mysqli_query($con, $get_posts);

    while ($row_posts = mysqli_fetch_array($run_posts)) {

        $post_id = $row_posts['post_id'];
        $user_id = $row_posts['user_id'];
        $content = substr($row_posts['post_content'], 0, 40);
        $upload_image = $row_posts['upload_image'];
        $post_date = $row_posts['post_date'];

        $user = "select *from users where user_id='$user_id' AND posts='yes'";
        $run_user = mysqli_query($con, $user);
        $row_user = mysqli_fetch_array($run_user);

        $user_name = $row_user['user_name'];

        //now displaying posts from database

        if ($content == "No") {
            echo "
			<div class='row'>
				<div class='col-sm-3'>
				</div>
				<div id='posts' class='col-sm-6'>
					<div class='row'>
						<div class='col-sm-2'>
						</div>
						<div class='col-sm-6'>
							<h3><a style='text-decoration:none; cursor:pointer;color #3897f0;' href='user_profile.php?u_id=$user_id'>$user_name</a></h3>
						</div>
						<div class='col-sm-4'>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12'>
						</div>
					</div><br>
					<a href='deletepost.php?post_id=$post_id' style='float:right;'><button class='btn btn-info'>Delete</button></a><br>
				</div>
				<div class='col-sm-3'>
				</div>
			</div><br><br>
			";
        } else if (strlen($content) >= 1) {
            echo "
			<div class='row'>
				<div class='col-sm-3'>
				</div>
				<div id='posts' class='col-sm-6'>
					<div class='row'>
						<div class='col-sm-2'>
						</div>
						<div class='col-sm-6'>
							<h3><a style='text-decoration:none; cursor:pointer;color #3897f0;' href='user_profile.php?u_id=$user_id'>$user_name</a></h3>
							<h4><small style='color:black;'>Updated a post on <strong>$post_date</strong></small></h4>
						</div>
						<div class='col-sm-4'>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12'>
							<p>$content</p>
						</div>
					</div><br>
					<a href='deletepost.php?post_id=$post_id' style='float:right;'><button class='btn btn-info'>Delete</button></a><br>
				</div>
				<div class='col-sm-3'>
				</div>
			</div><br><br>
			";
        } else {
            echo "
			<div class='row'>
				<div class='col-sm-3'>
				</div>
				<div id='posts' class='col-sm-6'>
					<div class='row'>
						<div class='col-sm-2'>
						</div>
						<div class='col-sm-6'>
							<h3><a style='text-decoration:none; cursor:pointer;color #3897f0;' href='user_profile.php?u_id=$user_id'>$user_name</a></h3>
							<h4><small style='color:black;'>Updated a post on <strong>$post_date</strong></small></h4>
						</div>
						<div class='col-sm-4'>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12'>
							<h3><p>$content</p></h3>
						</div>
					</div><br>
					<a href='deletepost.php?post_id=$post_id' style='float:right;'><button class='btn btn-info'>Delete</button></a><br>
				</div>
				<div class='col-sm-3'>
				</div>
			</div><br><br>
			";
        }
    }

    include("pagination.php");
}