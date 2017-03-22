<?php
session_start();
$faculty_id=$_REQUEST['faculty_id'];
$pwd=$_REQUEST['pwd'];

$conn=mysqli_connect("localhost","root","","testmarksanalysis");
$sql="select * from facultyinfo where username='$faculty_id' and password='$pwd'";



$result=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($result))
{
	echo "You are logged in!";
	$_SESSION['facultyname']=$faculty_id;
    $_SESSION['facultypass']=$pwd;
}
else
{
	echo "You are not allowed to log in! Please register!!!";
}

?>