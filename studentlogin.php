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
	width:200px;
}

.button1:hover {
    background-color: #008CBA;
    color: white;
	width:205px;
}
.border{
border:3px solid black;
border-radius:20px;
-moz-border-radius:20px;
padding:10px;
height:300px; 
width:400px;
}
</style>
<body background="back1.jpg">
<center><img src="raitlogo.jpg" style="width:100 px; height:100px;">
<h1><center><b>RAMRAO ADIK INSTITUTE OF TECHNOLOGY</h1></b></center>
<h1><center><b>TEST MARKS ANALYSIS</h1></b></center>
<center><button class="button button1"><a href="home.html" style="text-decoration:none;"><b>HOME</b></a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="button button1"><a href="studentlogout.php" style="text-decoration:none;"><b>LOG OUT</b></a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="button button1"><a href="about.html" style="text-decoration:none;"><b>ABOUT</b></a></button><br>
<?php
session_start();
$sname=$_REQUEST['sname'];
$rollno=$_REQUEST['rollno'];
$srno=$_REQUEST['srno'];
$class=$_REQUEST['class'];


$conn=mysqli_connect("localhost","root","","testmarksanalysis");
$sql="select * from $class where student_name='$sname' and rollno='$rollno' and sr_no='$srno'";
$result=mysqli_query($conn,$sql);
if($class=='se_a' || $class=='se_b' || $class=='se_c'){
while($row=mysqli_fetch_array($result)){
		echo "<br><br><table>";
		echo "<tr><td><b>Name</b></td><td><b>".$row['student_name']."</b></td></tr>";
		echo "<tr><td><b>Roll No.</b></td><td><b>".$row['rollno']."</b></td></tr>";
		echo "<tr><td><b>Sr. No.</b></td><td><b>".$row['sr_no']."</b></td></tr>";
		echo "<tr><td><b>Class</b></td><td><b>".$class."</b></td></tr>";
		echo "<tr><td><b>OOPM</b></td><td><b>".$row['OOPM']."</b></td></tr>";
		echo "<tr><td><b>DLDA</b></td><td><b>".$row['DLDA']."</b></td></tr>";
		echo "<tr><td><b>ECCF</b></td><td><b>".$row['ECCF']."</b></td></tr>";
		echo "<tr><td><b>DS</b></td><td><b>".$row['DS']."</b></td></tr>";
		echo "<tr><td><b>DIS</b></td><td><b>".$row['DIS']."</b></td></tr>";
		echo "<tr><td><b>AM_III</b></td><td><b>".$row['AM_III']."</b></td></tr>";
		echo "</table>";
		$_SESSION['sname']=$sname;
        $_SESSION['rollno']=$rollno;
	    $_SESSION['srno']=$srno;
	}
}
else if($class=='te_a' || $class=='te_b' || $class=='te_c'){
while($row=mysqli_fetch_array($result)){
		echo "<br><br><table>";
		echo "<tr><td><b>Name</b></td><td><b>".$row['student_name']."</b></td></tr>";
		echo "<tr><td><b>Roll No.</b></td><td><b>".$row['rollno']."</b></td></tr>";
		echo "<tr><td><b>Sr. No.</b></td><td><b>".$row['sr_no']."</b></td></tr>";
		echo "<tr><td><b>Class</b></td><td><b>".$class."</b></td></tr>";
		echo "<tr><td><b>OS</b></td><td><b>".$row['OS']."</b></td></tr>";
		echo "<tr><td><b>MP</b></td><td><b>".$row['MP']."</b></td></tr>";
		echo "<tr><td><b>SOOAD</b></td><td><b>".$row['SOOAD']."</b></td></tr>";
		echo "<tr><td><b>BCE</b></td><td><b>".$row['BCE']."</b></td></tr>";
		echo "<tr><td><b>CN</b></td><td><b>".$row['CN']."</b></td></tr>";
		echo "<tr><td><b>WT</b></td><td><b>".$row['WT']."</b></td></tr>";
		echo "<table>";
		$_SESSION['sname']=$sname;
        $_SESSION['rollno']=$rollno;
	    $_SESSION['srno']=$srno;
	}
}
else echo"<center><b>You are not a valid user!</b></center>";
?>