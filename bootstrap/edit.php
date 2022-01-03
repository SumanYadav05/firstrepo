<?php
include('config.php'); 
if(isset($_POST['submit'])){
    $name = $_POST['about'];
    $files = $_FILES['file'];

    //print_r($files);

    $filename=$files['name'];
    $fileerror=$files['error'];
    $filetmp=$files['tmp_name']; 
    $fileext=explode('.',$filename);
    $filecheck=strtolower(end($fileext));
    $fileextstored=array('png','jpg','jpeg');

    if(in_array( $filecheck, $fileextstored)){
        $destinationfile='upload/'.$filename;
        move_uploaded_file($filetmp,$destinationfile);
        
        $sql = "INSERT INTO about (`about`, `file`) values('". trim($name) ."','". $destinationfile ."')";
        $msg = "Your Record Successfully saved"; 
       
        if(mysqli_query($conn,$sql)){
            header("location:about.php");
          
        }else {
            echo "Error:";
        }
    }else{
        echo "Error: not working";
    }
}  


