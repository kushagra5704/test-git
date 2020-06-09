<?php
 include("connect.php");
$json = [] ;
$sq = "SELECT * FROM places";
$res = mysqli_query($con,$sq);
while($row = mysqli_fetch_array($res , MYSQLI_ASSOC))
{
array_push($json , $row);
}
echo json_encode($json);
?>