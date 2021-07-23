<?php
//connect to mySQL
$con = mysqli_connect("ec2-54-173-31-84.compute-1.amazonaws.com", "onkgwscjhuiloc", "3f28493056288a1d81657065fc6bfebe6b980a37f0458af8b47c6fc74d54f152", "dfs4hkn128tm6j"  );
//in format (LOCALHOST, ROOT, PASSWORD, DATABASE_NAME)

//testing the connection
// you may also use if(!$con) to say IF NO CONNECTION
// however, this is a builtin function for this task
if(mysqli_connect_errno()){
    //it could be in an echo statement but then it continues loading the UI for the webpage
    //to avoid the load of UI after any error, we use DIE() function
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
