<?
include("includes/header.php");
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Hit Me UP! Search</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<div class="container">
    <br/>
    <br/>
    <div class="header">
        <center>
            <h2>Find Friends</h2>
        </center>
    </div>
    <br/>
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon">Search</span>
            <input type="text" name="search_text" id="search_text" placeholder="Find People Here" class="form-control"/>
        </div>
    </div>
    <br/>
    <div id="result">

    </div>
</div>

<div style="clear:both">
</div>

</body>
</html>

<script>
    $(document).ready(function () {
        load_data();

        function load_data(query) {
            $.ajax({
                url: "fetch.php",
                method: "post",
                data: {query: query},
                success: function (data) {
                    $('#result').html(data);
                }
            });
        }

        $('#search_text').keyup(function () {
            var search = $(this).val();
            if (search != '') {
                load_data(search);
            } else {
                load_data();
            }
        });
    });
</script>




