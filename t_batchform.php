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
<button class="button button1"><a href="t_batchform.php" style="text-decoration:none;"><b>UPDATE MARKS</b></a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="button button1"><a href="facultylogout.php" style="text-decoration:none;"><b>LOG OUT</b></a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="button button1"><a href="about.html" style="text-decoration:none;"><b>ABOUT</b></a></button><br><br><br>
<h3>Choose any one class to enter marks</h3>
<?php
@$faculty_id=$_POST['faculty_id'];
@$pwd=$_POST['pwd'];

$conn=mysqli_connect("localhost","root","","testmarksanalysis");
$sql="select * from facultyinfo where username='$faculty_id' and password='$pwd'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if($row){
	
	echo '<button class="button button1"><a href="t_divlist.php?class1='.$row['class1'].'&sub1='.$row['sub1'].'" style="text-decoration:none;"><b>'.$row['class1'].'</b></a></button><br><br>';
	echo '<button class="button button1"><a href="t_divlist.php?class2='.$row['class2'].'&sub2='.$row['sub2'].'" style="text-decoration:none;"><b>'.$row['class2'].'</b></a></button><br><br>';
    echo '<button class="button button1"><a href="t_divlist.php?class3='.$row['class3'].'&sub3='.$row['sub3'].'" style="text-decoration:none;"><b>'.$row['class3'].'</b></a></button><br><br>';
}

?>