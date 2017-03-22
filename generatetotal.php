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
<button class="button button1"><a href="facultylogout.php" style="text-decoration:none;"><b>LOG OUT</b></a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="button button1"><a href="about.html" style="text-decoration:none;"><b>ABOUT</b></a></button><br>
<?php
$class=$_GET['class'];
$sub=$_GET['sub'];
echo "<h3>".$class."</h3>";
$conn=mysqli_connect("localhost","root","","testmarksanalysis");
$sql="Select * from $class";
$result=mysqli_query($conn,$sql);
if(!$result){
	echo mysqli_error($conn);
}
$total=0;
$percentage=0;
if($class=='se_a' || $class=='se_b' || $class=='se_c'){
echo "<table border='1'>";
echo "<h3>Students' marks</h3>";
echo "<tr><td><b>Sr. No.</b></td><td><b>Roll No.</b></td><td><b>Name of student</b></td><td><b>DLDA</b></td><td><b>AM III</b></td><td><b>ECCF</b></td><td><b>DIS</b></td><td><b>OOPM</b></td><td><b>DS</b></td><td><b>Total</b></td><td><b>Percentage</b></td></tr>";


while($row=mysqli_fetch_array($result)){
	$total=$row['DLDA']+$row['AM_III']+$row['ECCF']+$row['DIS']+$row['OOPM']+$row['DS'];
	$percentage=($total*100)/180;
	echo "<tr><td>".$row['sr_no']."</td><td>".$row['rollno']."</td><td>".$row['student_name']."</td><td>".$row['DLDA']."</td>";
	echo "<td>".$row['AM_III']."</td><td>".$row['ECCF']."</td><td>".$row['DIS']."</td><td>".$row['OOPM']."</td><td>".$row['DS']."</td><td>".$total."</td><td>".$percentage." %"."</td></tr>";
	$total=0;
	$percentage=0;
}
}
else if($class=='te_a' || $class=='te_b' || $class=='te_c'){
echo "<table border='1'>";
echo "<h3>Students' marks</h3>";
echo "<tr><td><b>Sr. No.</b></td><td><b>Roll No.</b></td><td><b>Name of student</b></td><td><b>OS</b></td><td><b>MP</b></td><td><b>SOOAD</b></td><td><b>BCE</b></td><td><b>CN</b></td><td><b>WT</b></td><td><b>Total</b></td><td><b>Percentage</b></td></tr>";
while($row=mysqli_fetch_array($result)){
	$total=$row['OS']+$row['MP']+$row['SOOAD']+$row['BCE']+$row['CN']+$row['WT'];
	$percentage=($total*100)/180;
	echo "<tr><td>".$row['sr_no']."</td><td>".$row['rollno']."</td><td>".$row['student_name']."</td><td>".$row['OS']."</td>";
	echo "<td>".$row['MP']."</td><td>".$row['SOOAD']."</td><td>".$row['BCE']."</td><td>".$row['CN']."</td><td>".$row['WT']."</td><td>".$total."</td><td>".$percentage." %"."</td></tr>";
	$total=0;
	$percentage=0;
}
}
?>
</body>
</html>