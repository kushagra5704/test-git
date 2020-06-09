<?php 
include("connect.php");
if(isset($_POST['password']) && isset($_POST['phone']))
{
$json = [] ;
$phone = mysqli_real_escape_string($con,trim($_POST['phone']));
$password = mysqli_real_escape_string($con,trim($_POST['password']));
$sq = "SELECT * FROM admin_login WHERE BINARY mobile = '$phone' AND BINARY password = '$password'";
$res = mysqli_query($con,$sq);
if(mysqli_num_rows($res) == 0)
{
echo 0 ;
}
else if(mysqli_num_rows($res) == 1 )
{
while($row = mysqli_fetch_array($res , MYSQLI_ASSOC))
{
array_push($json , $row);
}
echo json_encode($json);		 
}
}

?>