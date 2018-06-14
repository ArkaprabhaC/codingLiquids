<?php include "db_conn.php"; ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">


    <?php include "sidebar_topbar.php";?>


        <!--Main Content for add events-->
        <div class="container-fluid">
            <form action="" method="post">
                <div class="form-group">
                    <label for="program-name" class="h3">Event name:</label>
                    <input type="text" class="form-control" name="program-name">
                </div>
                <div class="form-group">
                    <label for="program-start-date" class="h3">Event start date:</label>
                    <input type="date" class="form-control" name="program-start-date">
                </div>
                <div class="form-group">
                    <label for="program-end-date" class="h3">Event end date:</label>
                    <input type="date" class="form-control" name="program-end-date">
                </div>
                <div class="form-group">
                    <label for="program-venue" class="h3">Event venue:</label>
                    <input type="text" class="form-control" name="program-venue">
                </div>
                <div class="form-group">
                    <label for="register-link" class="h3">Google Form link:</label>
                    <input type="text" class="form-control" name="register-link">
                </div>
                <div class="form-group">
                    <label for="program-detail">Details:</label>
                    <textarea class="form-control" rows="10" name="program-detail" style="height:250px !important;"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-success h4">add event</button>
                </div>

                <!--To Do: Add user name who is posting the event and cur date of posting-->
            </form>
        </div>


        <?php
           if(isset($_POST['submit'])){
                $prog_name = $_POST['program-name'];
                $prog_start_date = $_POST['program-start-date'];
                 $prog_end_date = $_POST['program-end-date'];
                $prog_venue = $_POST['program-venue'];
                $prog_link = $_POST['register-link'];
                $prog_detail = $_POST['program-detail'];
                $post_author = "ArkoTest"; //Remove/modify post author when adding sessions and auth

                $query = "INSERT INTO posts(program_name, program_start_date, program_end_date, program_venue, program_detail, register_link, author, 
posting_date) VALUES('{$prog_name}','{$prog_start_date}','{$prog_end_date}','{$prog_venue}','{$prog_detail}','{$prog_link}',
'{$post_author}',now())";

                $result = mysqli_query($conn,$query);
                if(!$result) {
                    die("Error.Contact Webmaster.Error Description: " . mysqli_error($conn));
                }

           }


        ?>






    </div>
</div>

</body>

    <!--   Core JS Files   -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
