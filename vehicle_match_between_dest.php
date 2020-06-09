<?php 
include("connect.php");
if(isset($_POST['source']))
{
if(isset($_POST['destination']))
{
$json = [] ;
$source = mysqli_real_escape_string($con,trim($_POST['source']));
$destination = mysqli_real_escape_string($con,trim($_POST['destination']));
?>
<?php
$sq = "SELECT * FROM add_vehicle WHERE source = '$source' AND destination = '$destination'";
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
}
?>