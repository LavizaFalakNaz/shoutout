<?php
//connect to mySQL
$con = mysqli_connect("remotemysql.com:3306", "nKGtJBAN29", "4krUSNEuI3", "nKGtJBAN29"  );
//in format (LOCALHOST, ROOT, PASSWORD, DATABASE_NAME)

//testing the connection
// you may also use if(!$con) to say IF NO CONNECTION
// however, this is a builtin function for this task
if(mysqli_connect_errno()){
    //it could be in an echo statement but then it continues loading the UI for the webpage
    //to avoid the load of UI after any error, we use DIE() function
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
