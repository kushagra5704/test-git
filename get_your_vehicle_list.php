<?php
include("connect.php");
$user_id=$_POST['user_id'];
$sql ="SELECT c.vech_id , c.model_no,c.reg_no,c.delivery_start_date,c.delivery_end_date,ROUND(c.weight/c.capacity , 2) as full_percent ,c.approval_status ,a.names as source,b.names as destination FROM add_vehicle AS c INNER JOIN places AS a INNER JOIN places AS b ON a.plc_id = c.source AND b.plc_id = c.destination  WHERE user_id='$user_id' ORDER BY c.date DESC";
$result = mysqli_query($con,$sql);
$json = array() ;
if(mysqli_num_rows($result) >= 1)
{
while($row = mysqli_fetch_array($result))
{
array_push($json,$row);
}
echo json_encode($json) ; 
}
else
{
echo 0 ;
}

?>