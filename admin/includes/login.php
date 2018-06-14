<?php include "db_conn.php"; ?>
<?php
session_start();
   /*
    * Login in and session start for particular user script
    */
if(isset($_POST['signInBtn'])){
    $admin_email =  mysqli_real_escape_string($conn , $_POST['adminEmail']);
    $admin_pwd = mysqli_real_escape_string($conn , $_POST['adminPwd']);

    $signin_query = "SELECT * FROM users WHERE user_email = '{$admin_email}' and user_pwd = '$admin_pwd'";
    $signin_result = mysqli_query($conn,$signin_query);
    if(mysqli_num_rows($signin_result)===0){
        echo 'Invalid username or password';
    }else{

        while ($row = mysqli_fetch_assoc($signin_result)) {
            $_SESSION["user_name"] = $row['user_name'];
            $_SESSION["user_email"] = $row['user_email'];
            $_SESSION["user_pwd"] = $row['user_pwd'];
            $_SESSION["first_name"] = $row['first_name'];
            $_SESSION["last_name"] = $row['last_name'];
            $_SESSION["country"] = $row['country'];
            $_SESSION["user_bio"] = $row['user_bio'];
        }
        header('Location: ../dashboard.php');

    }
}