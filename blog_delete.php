<?php
include"connect.php";
// sqlto delete a record
$sql= "DELETEFROMblog WHEREid=$_GET[id]";
if($conn->query($sql) === TRUE) {
echo"Record deleted successfully";
header( "location: blog_view.php");
exit(0);
} else{
echo"Error deleting record: ". $conn->error;
}
$conn->close();
?>