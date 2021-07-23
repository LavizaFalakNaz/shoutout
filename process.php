<?php 

//$_POST['user'] helps to getch any data that was sent through POST method with name user

include 'database.php';

//check if form is submitted
if(isset($_POST['Submit'])){
    //mysqli_real_escape_string removes any default html tags and extra text that may be passed with the submit button
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $message = mysqli_real_escape_string($con, $_POST['message']);
    
    //set timezone
    date_default_timezone_set('America/New_York');
    $time = date('h:i:s a', time());
    
    //validation for inouts 
    if(!isset($user) || $user=='' || $message=='' || !isset($message))
    {
        $error = "Please fil in your name and message";
        //now since we want to bring along this message with the message header, we use this
        header("Location: index.php?error=".urlencode($error));
        //urlencode() functions reduces the unreadable files in the url and makes it url friendly to make it look better
        exit();
    }
    else{
        $query = "INSERT INTO shout (user, message, time)
            VALUES('$user','$message','$time')";
        if(!mysqli_query($con, $query)){
            die('Error: '.mysqli_error($con));
        }
        else{
            header("Location: index.php");
            exit();
        }
    }
}
