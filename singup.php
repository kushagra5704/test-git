 <?php 
 include("connect.php"); 
	$shop_address = ""	 ;
	$shop_name = "";
	$mobile = "";
	
	 
	 
	 
	$fullname = mysqli_real_escape_string($con,trim($_POST['name']));
	$password = mysqli_real_escape_string($con,trim($_POST['password']));
	
	
	if(isset($_POST['shop_address']))
	{
	$shop_address = mysqli_real_escape_string($con,trim($_POST['shop_address']));
	}
	
	if(isset($_POST['shop_name']))
	{
	$shop_name = mysqli_real_escape_string($con,trim($_POST['shop_name']));	
	}
	
	if(isset($_POST['mobile']))
	{
	$mobile = mysqli_real_escape_string($con,trim($_POST['mobile']));
	}
	
	
	 
	 $sql = "INSERT INTO login_user (name,password,shop_address,shop_name,mobile) VALUES('$fullname','$password','$shop_address','$shop_name','$mobile')";
	 if(mysqli_query($con,$sql))
	 {	
		echo 1 ;

	}
	else
	{
		echo 0 ;
	}
 
 ?>
