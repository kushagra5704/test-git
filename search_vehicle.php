<?php 
include("connect.php");
if(isset($_POST['source']) && isset($_POST['destination']))
{
date_default_timezone_set('Asia/Kolkata'); 
$source = $_POST['source'] ;
$destination = $_POST['destination'] ;
$json = [] ;
$sq ="SELECT c.vech_id, c.model_no,c.reg_no,c.delivery_start_date,c.delivery_end_date,ROUND(c.weight/c.capacity , 2) as full_percent ,c.approval_status ,a.names as source,b.names as destination FROM add_vehicle AS c INNER JOIN places AS a INNER JOIN places AS b ON a.plc_id = c.source AND b.plc_id = c.destination  WHERE c.source = '$source' AND c.destination = '$destination' AND c.capacity > weight AND c.delivery_start_date <= CURDATE() AND c.delivery_end_date >= CURDATE() AND c.approval_status='1' ORDER BY c.date DESC";
//$result = mysqli_query($con,$sql);
//$sq = "SELECT * FROM add_vehicle WHERE source = '$source' AND destination = '$destination' AND capacity > weight AND delivery_start_date <= CURDATE() AND delivery_end_date >= CURDATE() AND approval_status='1'";
$res = mysqli_query($con,$sq);
if(mysqli_num_rows($res) == 0)
{
echo 0 ;
}
else if(mysqli_num_rows($res) >= 1 )
{
while($row = mysqli_fetch_array($res , MYSQLI_ASSOC))
{
array_push($json , $row);
}
echo json_encode($json);		 
}
}

?>