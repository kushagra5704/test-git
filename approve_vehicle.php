<?php
include("connect.php");
if(isset($_POST['vech_id']) && isset($_POST['approval_status']))
{
$vech_id=$_POST['vech_id'];
$approval_status=$_POST['approval_status'];
$sql = "UPDATE add_vehicle SET approval_status='$approval_status' WHERE vech_id='$vech_id'" ;
$result = mysqli_query($con,$sql);
echo 1 ;
}
?>