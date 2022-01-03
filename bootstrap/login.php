<?php 
	include('config.php');
	
	if(isset($_POST['act']) && !empty($_POST['act']))
    {
		$_POST['act']();
	}
	
	function admin_login()
	{

		global $conn;
		
		$username= $_POST['name'];   
		$password= $_POST['pwd'];
		 
		$sql= "SELECT * FROM first_login WHERE name ='".$username."' AND  pwd='".$password."'"; 
		$rs= mysqli_query($conn,$sql);
		$num= mysqli_num_rows($rs);
		
		if($num == 1)
		{
		
			header("location:update.php");

		}	
		else
		{
			$error= "User name Password not exist.....";
			header("location:home.php?error=$error");
		}
		
	}	 

?>