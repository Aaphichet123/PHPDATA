<?php
include"connect.php";
$sql= "UPDATEblog SETtitle='$_POST[title]', content='$_POST[content]' WHEREid=$_POST[id]";
if($conn->query($sql) === TRUE) {
echo"Record updated successfully";
echo"Record deleted successfully";
header( "location: blog_view.php");
exit(0);
} else{
echo"Error updating record: ". $conn->error;
}
$conn->close();
?>