<?php
include("connect.php");
if(isset($_POST['place']))
{
$names=$_POST['place'];
$sql ="SELECT * FROM places WHERE names='$names'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) == 1)
{
echo 0 ;
}
if(mysqli_num_rows($result) == 0)
{
$sq = "INSERT INTO places('names')VALUES('$names')";
$res = mysqli_query($con,$sq);
echo 1 ;
}

}
?>