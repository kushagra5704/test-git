<?php 
include("connect.php");
date_default_timezone_set("Asia/Kolkata");
$model_no = "";
$capacity = "";
$reg_no = "";
$driver_license_no = "";
$load_type = "";
$weight = "";
$quantity = "";
$source = "";
$destination = "";
$delivery_start_date = "";
$delivery_end_date = "";
$approval_status = 0;
$date=date('Y-m-d',time());
$unit_id = "";
if(isset($_POST['model_no']))
{
$model_no = mysqli_real_escape_string($con,trim($_POST['model_no']));
}
if(isset($_POST['capacity']))
{
$capacity = mysqli_real_escape_string($con,trim($_POST['capacity']));	
}
if(isset($_POST['reg_no']))
{
$reg_no = mysqli_real_escape_string($con,trim($_POST['reg_no']));
}
if(isset($_POST['driver_license_no']))
{
$driver_license_no = mysqli_real_escape_string($con,trim($_POST['driver_license_no']));
}
if(isset($_POST['load_type']))
{
$load_type = mysqli_real_escape_string($con,trim($_POST['load_type']));
}
if(isset($_POST['weight']))
{
$weight = mysqli_real_escape_string($con,trim($_POST['weight']));
}
if(isset($_POST['quantity']))
{
$quantity = mysqli_real_escape_string($con,trim($_POST['quantity']));
}


if(isset($_POST['source']))
{
$source = mysqli_real_escape_string($con,trim($_POST['source']));
}
if(isset($_POST['destination']))
{
$destination = mysqli_real_escape_string($con,trim($_POST['destination']));
}
if(isset($_POST['delivery_start_date']))
{
$delivery_start_date = mysqli_real_escape_string($con,trim($_POST['delivery_start_date'] ));
}
if(isset($_POST['delivery_end_date']))
{
$delivery_end_date = mysqli_real_escape_string($con,trim($_POST['delivery_end_date'] ));
}
if(isset($_POST['approval_status']))
{
$approval_status = 0 ;
}
if(isset($_POST['unit_id']))
{
$unit_id =mysqli_real_escape_string($con,trim($_POST['unit_id']));
}
$user_id = $_POST['user_id'];
$sql = "INSERT INTO add_vehicle (model_no,capacity,reg_no,driver_license_no,load_type,weight,quantity,source,destination,delivery_start_date,delivery_end_date,approval_status,date,unit_id,user_id) VALUES('$model_no','$capacity','$reg_no','$driver_license_no','$load_type','$weight','$quantity','$source','$destination','$delivery_start_date','$delivery_end_date','$approval_status','$date','$unit_id','$user_id')";
if(mysqli_query($con,$sql))
{	
echo 1 ;
}
else
{
echo 0 ;
}
?>