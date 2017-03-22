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
echo "<h1>".$class." ".$sub."</h1>";
$conn=mysqli_connect("localhost","root","","testmarksanalysis");
$sql="Select * from $class order by $sub DESC";
$result=mysqli_query($conn,$sql);
if(!$result){
	echo mysqli_error($conn);
}
echo "<table border='1'>";
echo "<h1>The list of students in descending order of marks</h1>";
echo "<tr><td><b>Sr. No.</b></td><td><b>Roll No.</b></td><td><b>Name of student</b></td><td><b>Marks</b></td></tr>";
while($row=mysqli_fetch_array($result)){
	
	echo "<tr><td>".$row['sr_no']."</td><td>".$row['rollno']."</td><td>".$row['student_name']."</td><td>".$row[$sub]."</td></tr>";
	
}
?>
</body>
</html>