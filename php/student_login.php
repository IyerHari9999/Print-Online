<?php

include("connection.php");
$userExists=false;
$error="";
if(isset($_POST['submit']))
{
    if(empty($_POST['UserID']) || empty($_POST['Password']))
    {
    $error = "Username or Password is Invalid";
    }
    else
    {
        $user_UID=$_POST['UserID'];
        $user_pwd=$_POST['Password'];

    }
    if($connection->connect_error)
    {
        echo "database connection error ";
        die("connection failed: ".$connection->connect_error);
    }
    else
    {
        $query=mysqli_query($connection,"SELECT * FROM  table_student WHERE UID='$user_UID' AND pwd='$user_pwd'");
        $count=mysqli_num_rows($query);
        if($count)
            {
                $userExists=true;
                $error="Successfully logged in";
            }
        else 
            $error="Username or password incorrect";
    }
}
?>