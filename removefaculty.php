<html>
<head>
<style>
.button {
    background-color: #008CBA; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white;
    color: black;
    border: 2px solid #008CBA;
	width:260px;
}

.button1:hover {
    background-color: #008CBA;
    color: white;
	width:260px;
}
.border{
border:3px solid black;
border-radius:20px;
-moz-border-radius:20px;
padding:10px;
height:200px; 
width:400px;
}
</style>
</head>
<body background="back1.jpg">
<center><img src="raitlogo.jpg" style="width:100 px; height:100px;"></center>
<center><h1><b>RAMRAO ADIK INSTITUTE OF TECHNOLOGY</h1></b></center>
<center><h1><b>TEST MARKS ANALYSIS</h1></b></center>
<center>
<button class="button button1"><a href="home.html" style="text-decoration:none;"><b>HOME</b></a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="button button1"><a href="adminlogout.php" style="text-decoration:none;"><b>LOG OUT</b></a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="button button1"><a href="about.html" style="text-decoration:none;"><b>ABOUT</b></a></button></center>
<br><br>
<div style="float:left;">
<button class="button button1"><a href="t_admin.html" style="text-decoration:none;"><b>ADD FACULTY</b></a></button><br>
<button class="button button1"><a href="removefaculty.html" style="text-decoration:none;"><b>REMOVE FACULTY</b></a></button><br>
<button class="button button1"><a href="updatefaculty.html" style="text-decoration:none;"><b>UPDATE FACULTY</b></a></button><br>
<button class="button button1"><a href="addstudent.html" style="text-decoration:none;"><b>ADD STUDENT</b></a></button><br>
<button class="button button1"><a href="removestudent.html" style="text-decoration:none;"><b>REMOVE STUDENT</b></a></button><br>
<button class="button button1"><a href="facultylist.php" style="text-decoration:none;"><b>FACULTY LIST</b></a></button><br>
</div>

<?php
$facultyname=$_POST['facultyname'];
$password=$_POST['facultypass'];

$conn=mysqli_connect("localhost","root","","testmarksanalysis");
$sql1="select * from facultyinfo where username='$facultyname' and password='$password'";
$sql="delete from facultyinfo where username='$facultyname' and password='$password'";
$result=mysqli_query($conn,$sql1);
$row=mysqli_fetch_array($result);
if($row && mysqli_query($conn,$sql)){
	echo "<center><b>Faculty details removed successfully!</b></center>";
}
else{
	echo "<center><b>Error! No such entry found!</b></center>";
}
?>