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
height:300px; 
width:500px;
}
td{
	text-align: center;
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
$conn=mysqli_connect("localhost","root","","testmarksanalysis");
$sql="select * from facultyinfo";
$result=mysqli_query($conn,$sql);

echo "<table border='1' style='margin-left:400px; border-collapse: collapse; '>";
echo "<tr><td><b>&nbsp;&nbsp;&nbsp;&nbsp;Name of faculty&nbsp;&nbsp;&nbsp;&nbsp;</b></td><td><b>&nbsp;&nbsp;&nbsp;&nbsp;Username&nbsp;&nbsp;&nbsp;&nbsp;</b></td><td><b>&nbsp;&nbsp;&nbsp;&nbsp;Class1&nbsp;&nbsp;&nbsp;&nbsp;</b></td><td><b>&nbsp;&nbsp;&nbsp;&nbsp;Subject1&nbsp;&nbsp;&nbsp;&nbsp;</b></td>";
echo "<td><b>&nbsp;&nbsp;&nbsp;&nbsp;Class2&nbsp;&nbsp;&nbsp;&nbsp;</b></td><td><b>&nbsp;&nbsp;&nbsp;&nbsp;Subject2&nbsp;&nbsp;&nbsp;&nbsp;</b></td><td><b>&nbsp;&nbsp;&nbsp;&nbsp;Class3&nbsp;&nbsp;&nbsp;&nbsp;</b></td><td><b>&nbsp;&nbsp;&nbsp;&nbsp;Subject3&nbsp;&nbsp;&nbsp;&nbsp;</b></td></tr>";
while($row=mysqli_fetch_array($result)){
	echo "<tr><td>".$row['facultyname']."</td><td>".$row['username']."</td><td>".$row['class1']."</td><td>".$row['sub1']."</td>";  
	echo "<td>".$row['class2']."</td><td>".$row['sub2']."</td><td>".$row['class3']."</td><td>".$row['sub3']."</td></tr>";
}
echo "</table>";
echo "</div>"
?>








