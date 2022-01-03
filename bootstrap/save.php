<?php
include('config.php');
$sql = "INSERT INTO `contact` (`name`,`email`,`message`)values('".$_POST['name']."','".$_POST['email']."','".$_POST['message']."')"; 
 $msg="Your Record Successfully saved"; 
   $rs=mysqli_query($conn,$sql);
	 if($rs){
    header('location:contact.php?msg='.$msg);
}
else {
  echo "Error:";
}
?>
