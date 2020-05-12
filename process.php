<?php include 'database.php';

// runs after form submission. checks if form submitted
// real escape skips any harmful content that is submitted
if(isset($_POST['submit'])){
    $user =  mysqli_real_escape_string($con, $_POST['user']);
    $message =  mysqli_real_escape_string($con, $_POST['message']);

    date_default_timezone_set('America/New_York');
    $time = date('h:i:s a',time()); // his stands for formatting

    // validation of data
    if(!isset($user) || $user == '' || !isset($message) || $message == '') {
        $error ="Please fill in your name and a message";
        header("Location: index.php?error=".urlencode($error));
        exit();
    }
    else {
        $query = "INSERT INTO shouts (user,message,time) VALUES('$user','$message','$time')";
        if(!mysqli_query($con,$query)){
            die('Error'.mysqli_error($con));
        }
        else {
            header("Locaion: index.php");
            exit();
        }
    }
}