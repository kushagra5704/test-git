<?php
include("connect.php");
//$vech_id=$_POST['vech_id'];
$sql ="SELECT * FROM add_vehicle WHERE approval_status='1' ORDER BY date DESC";
$result = mysqli_query($con,$sql);
echo 1 ;
?>