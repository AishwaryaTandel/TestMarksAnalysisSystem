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
@$class1=$_GET['class1'];
@$class2=$_GET['class2'];
@$class3=$_GET['class3'];
@$sub1=$_GET['sub1'];
@$sub2=$_GET['sub2'];
@$sub3=$_GET['sub3'];
/*echo $class1;
if(@$class1!=''){
	$class==$class1;
}
else if(@$class2!=''){
	$class==$class2;
}
else if(@$class3!=''){
	$class==$class3;
}*/
$conn=mysqli_connect("localhost","root","","testmarksanalysis");

$count=0;
if($class1!=''){
echo "<h3>$sub1</h3>";
echo "<h3>Enter marks out of 30</h3>";
$sql="select * from $class1";
$result1=mysqli_query($conn,$sql);
echo "<form action='submit_marks.php?class=".$class1."&sub=".$sub1."' method='post'>";
echo "<table>";
echo "<tr><td><b>Sr. No.&nbsp;&nbsp;&nbsp;</b></td><td><b>Roll No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name of student&nbsp;&nbsp;&nbsp;</b></td><td><b>Previous Marks</b></td><td><b>
&nbsp;&nbsp;&nbsp;Marks</b></td></tr>";
while($row1=mysqli_fetch_array($result1)){
	
   $count++;
   echo "<b><tr><td>".$row1['sr_no']."</td><td>".$row1['rollno']."</td><td>".$row1['student_name']."</td><td>".$row1[$sub1]."</td><td><input type='number' name='".$count."'></td></tr></b>";
}
}
else if($class2!=''){
echo "<h1>$sub2</h1>";
$sql="select * from $class2";
$result1=mysqli_query($conn,$sql);
echo "<form action='submit_marks.php?class=".$class2."&sub=".$sub2."' method='post'>";
echo "<table border='1'>";
echo "<tr><td><b>Sr. No.</b></td><td><b>&nbsp;&nbsp;&nbsp;Roll No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name of student&nbsp;&nbsp;&nbsp;</b></td><td><b>Previous Marks</b></td><td><b>
&nbsp;&nbsp;&nbsp;Marks</b></td></tr>";
while($row1=mysqli_fetch_array($result1)){
	
   $count++;
   echo "<b><tr><td>".$row1['sr_no']."</td><td>".$row1['rollno']."</td><td>".$row1['student_name']."</td><td>".$row1[$sub2]."</td><td><input type='number' name='".$count."'></td></tr></b>";
}
}
else if($class3!=''){
echo "<h1>$sub3</h1>";
$sql="select * from $class3";
$result1=mysqli_query($conn,$sql);
echo "<form action='submit_marks.php?class=".$class3."&sub=".$sub3."' method='post'>";
echo "<table border='1'>";
echo "<tr><td><b>Sr. No.</b></td><td><b>&nbsp;&nbsp;&nbsp;Roll No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name of student&nbsp;&nbsp;&nbsp;</b></td><td><b>Previous Marks</b></td><td><b>
&nbsp;&nbsp;&nbsp;Marks</b></td></tr>";
while($row1=mysqli_fetch_array($result1)){
	
   $count++;
   echo "<b><tr><td>".$row1['sr_no']."</td><td>".$row1['rollno']."</td><td>".$row1['student_name']."</td><td>".$row1[$sub3]."</td><td><input type='number' name='".$count."'></td></tr></b>";
}
}
echo "</table><br><br>";
echo "<input type='submit' class='button button1'>";
echo "</b>";
echo "</form>";
//echo $faculty_id;
?>
</body>
</html>