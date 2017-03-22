<?php
session_start();
$name=$_GET['name'];
$pass=$_GET['pass'];
$conn=mysqli_connect('localhost','root','','testmarksanalysis');
$sql="select * from admininfo where Name='$name' and Password='$pass'";
$result=mysqli_query($conn,$sql);
if(!mysqli_num_rows($result))
	{
		echo "<BR><BR><p style='color:red'><b>You are not a valid user admin!!!</b></p>";
	}
else{
	echo "Go ahead";
	$_SESSION['adminname']=$name;
    $_SESSION['adminpass']=$pass;
}
?>