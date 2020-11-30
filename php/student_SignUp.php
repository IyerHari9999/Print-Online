<?php

include("connection.php");

if (isset($_POST['UserID']))
    $user_UID=$_POST['UserID'];
if (isset($_POST['fname']))
    $user_fname=$_POST['fname'];
if (isset($_POST['lname']))
    $user_lname=$_POST['lname'];
if (isset($_POST['Department']))
    $user_dept=$_POST['Department'];
if (isset($_POST['Password']))
    $user_pwd=$_POST['Password'];

$error="";

function CheckIfAllSet()
{
    if(isset($_POST['UserID'])&& isset($_POST['fname'])&&isset($_POST['lname']) && isset($_POST['Department'])&&  isset($_POST['Password']))
        return true;
    return false;
}
function CheckNullException($user_dept,$user_fname,$user_lname, $user_pwd, $user_UID)
{
    if($user_dept==NULL || $user_fname==NULL || $user_lname==NULL || $user_pwd==NULL || $user_UID==NULL)
        throw new Exception('Check values');
    return true;
}

if($connection->connect_error)
{
    echo "database connection error ";
    die("connection failed: ".$connection->connect_error);
}
else
{
    if(CheckIfAllSet())
    //check for null
    {
        try
        {
            CheckNullException($user_dept,$user_fname,$user_lname,$user_pwd,$user_UID);
        }
        catch(Exception $E)
        {
            echo 'Error in values'.$E->getMessage();
            //return;
        }

        //check if username already exists
        $query=mysqli_query($connection,"SELECT * FROM  table_student WHERE UID='$user_UID' ");
        $count=mysqli_num_rows($query);

        if($count!=0)       //username already registered
            $error="Username already registered.";
        else            //new username(userid)
        {
            //user table
            $stmt1=$connection->prepare(" INSERT INTO table_user(UID,pwd) VALUES (?,?)");
            $stmt1->bind_param('is',$user_UID,$user_pwd);
            $stmt1->execute();
            $stmt1->close();
            
            //student table
            $stmt2=$connection->prepare("
            INSERT INTO table_student(UID,fname,lname,dept)
            VALUES (?,?,?,?)
            ");

            $user_deptID=NULL;
            if(!strcmp('COMPS',$user_dept))
                $user_deptID=1;
            if(!strcmp('EXTC',$user_dept))
                $user_deptID=2;
            if(!strcmp('MECH',$user_dept))
                $user_deptID=3;
            if(!strcmp('IT',$user_dept))
                $user_deptID=4;

            $stmt2->bind_param('issi',$user_UID,$user_fname,$user_lname,$user_deptID);
            $execval=$stmt2->execute();
            echo "Registered successfully";
            $stmt2->close();
        }
    }
    
    
    $connection->close();

}


?>
