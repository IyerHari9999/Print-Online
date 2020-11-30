<?php
    session_start();
    include("connection.php");
?>
<?php
if (isset($_POST['submit'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['PDF_File']['name'];

    // destination of the file on the server
    $destination = '../uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['PDF_File']['tmp_name'];
    $size = $_FILES['PDF_File']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) 
    {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['PDF_File']['size'] > 1000000) 
    { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else
     {
        // move the uploaded (temporary) file to the specified destination
        /*if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (name, size, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
            */
            //echo "SUCCESS";
               // move_uploaded_file($file, $destination);
        $ucurrentUser=$_SESSION["CURRENT_USER"];
        $ufriendlyName=$_POST["PDF_title"];
        $upages=1;
        $uprice=$upages*2;
        $ustatus="queued";
        $utimeIn=date("Y/m/d");
        $utimeOut="30/12/9999";
        $utotalTime="30/12/9999";
        $utype=0;
        $ufileName=$filename;
        if($stmt1=$connection->prepare("INSERT INTO table_request(friendlyName,pages,price,status,TimeIn,Timeout,TotalTime,type,UID,filename) VALUES(?,?,?,?,?,?,?,?,?,?)"))
        {
        $stmt1->bind_param('sidssssiis',$ufriendlyName,$upages,$uprice,$ustatus,$utimeIn,$utimeOut,$utotalTime,$utype,$ucurrentUser,$ufileName);
        $stmt1->execute();
        $stmt1->close();
        move_uploaded_file($file, $destination);
        echo gettype($utimeIn);
        }
    }
}

?>