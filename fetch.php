<?php
include("includes/connection.php");

$output = '';
if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($con, $_POST["query"]);
    $query = "
	SELECT * FROM users
	WHERE user_id LIKE '%" . $search . "%'
	OR f_name LIKE '%" . $search . "%' 
	OR l_name LIKE '%" . $search . "%' 
	OR user_country LIKE '%" . $search . "%' 
	OR user_gender LIKE '%" . $search . "%'
	";
} else {
    $query = "
	SELECT * FROM users ORDER BY user_id";
}
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    $output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>User id</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Country</th>
							<th>Sex</th>
						</tr>';
    while ($row = mysqli_fetch_array($result)) {
        $output .= '
			<tr>
				<td>' . $row["user_id"] . '</td>
				<td>' . $row["f_name"] . '</td>
				<td>' . $row["l_name"] . '</td>
				<td>' . $row["user_country"] . '</td>
				<td>' . $row["user_gender"] . '</td>
			</tr>
		';
    }
    echo $output;
} else {
    echo 'Data Not Found';
}