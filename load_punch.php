<?php
include("connect.php");
if(isset($_POST['vech_id']) && isset($_POST['weight']))
{
$vech_id=$_POST['vech_id'];
$weight=$_POST['weight'];
$sql ="SELECT * FROM add_vehicle WHERE vech_id='$vech_id'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) == 1)
{
$row = mysqli_fetch_array($result);
$weight1 = $row['weight'] + $weight ;
$sq = "UPDATE add_vehicle SET weight='$weight1' WHERE vech_id='$vech_id'" ;
mysqli_query($con,$sq);
echo 1 ;
}
}
?>