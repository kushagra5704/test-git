<?php
include("connect.php");
if(isset($_POST['vech_id']))
{
$vech_id=$_POST['vech_id'];
"SELECT c.* ,a.names as source,b.names as destination FROM add_vehicle AS c INNER JOIN places AS a INNER JOIN places AS b ON a.plc_id = c.source AND b.plc_id = c.destination  WHERE c.vech_id = '$vech_id' AND c.approval_status='1' ORDER BY c.date DESC";
$sql ="SELECT * FROM add_vehicle WHERE vech_id='$vech_id' AND approval_status='1'";
$result = mysqli_query($con,$sql);
$json = array() ;
if(mysqli_num_rows($result) == 1)
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
}
?>