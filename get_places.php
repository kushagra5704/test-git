<?php
include("connect.php");

$sql ="SELECT * FROM places";
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