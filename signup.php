<?php 
include("connect.php"); 
if(isset($_POST['shop_address']) && isset($_POST['shop_name']) && isset($_POST['mobile']) && isset($_POST['name']) && isset($_POST['password']))
{
$shop_address = ""	 ;
$shop_name = "";
$mobile = "";
$fullname = mysqli_real_escape_string($con,$_POST['name']);
$password = mysqli_real_escape_string($con,$_POST['password']);
if(isset($_POST['shop_address']))
{
$shop_address = mysqli_real_escape_string($con, $_POST['shop_address']);
}
if(isset($_POST['shop_name']))
{
$shop_name = mysqli_real_escape_string($con, $_POST['shop_name']);	
}
if(isset($_POST['mobile']))
{
$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
}
$sq  ="SELECT * FROM login_user WHERE mobile='$mobile'" ;
$res = mysqli_query($con,$sq);
if(mysqli_num_rows($res) == 1)
{
echo 2 ;
}
else if(mysqli_num_rows($res) == 0) 
{
$sql = "INSERT INTO login_user (name,password,shop_address,shop_name,mobile) VALUES('$fullname','$password','$shop_address','$shop_name','$mobile')";
if(mysqli_query($con,$sql))
{	
echo 1 ;
}
else
{
echo 0 ;
}
}
}
?>
