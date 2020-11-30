<?php
include("connection.php");
session_start();
?>
<?php

if(isset($_POST['submit']))
{
    //echo $_POST['ridField'];
    $req_status=$_POST['Status'];
   if(!strcmp('Completed',$req_status))
    {
        $stmt1=$connection->prepare("UPDATE table_request SET status='completed' WHERE Rid=? and friendlyName=?");
        $stmt1->bind_param('is',$_POST['ridField'],$_POST['fnameField']);
        $stmt1->execute();
        $stmt1->close();
        //upTime
        $stmt1=$connection->prepare("UPDATE table_request SET TimeOut=? WHERE Rid=? and friendlyName=?");
        $_currDate=date("Y/m/d");
        $stmt1->bind_param('sis',$_currDate ,$_POST['ridField'],$_POST['fnameField']);
        $stmt1->execute();
        $stmt1->close();
        //totalTime
        //date_diff(date("Y/m/d"),)
    }
    if(!strcmp('Reject',$req_status))
    {
    $stmt1=$connection->prepare("UPDATE table_request SET status='rejected' WHERE Rid=? and friendlyName=?");
    $stmt1->bind_param('is',$_POST['ridField'],$_POST['fnameField']);
    $stmt1->execute();
    $stmt1->close();
    }

    
}
?>