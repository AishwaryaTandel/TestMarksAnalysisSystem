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
$password=$_POST['pass'];

$conn=mysqli_connect("localhost","root","","testmarksanalysis");
$sql1="select * from facultyinfo where username='$facultyname' and password='$password'";
$row=mysqli_fetch_array(mysqli_query($conn,$sql1));
echo "<table border='1' style='margin-left:525px'>";
echo "<tr><td><b>Name of faculty</b></td><td><b>Username</b></td><td><b>Class1</b></td><td><b>Subject1</b></td>";
echo "<td><b>Class2</b></td><td><b>Subject2</b></td><td><b>Class3</b></td><td><b>Subject3</b></td></tr>";
if($row){
	echo "<tr><td>".$row['facultyname']."</td><td>".$row['username']."</td><td>".$row['class1']."</td><td>".$row['sub1']."</td>";  
	echo "<td>".$row['class2']."</td><td>".$row['sub2']."</td><td>".$row['class3']."</td><td>".$row['sub3']."</td></tr>";  
}
?>
<html>
<head>
<script>
function validatename(fnm){
//var nm=document.getElementById('facultyname');
if(fnm=="")
alert("Enter a valid faculty name!");}
function validateusername(unm){
//var nm=document.getElementById('facultyname');
if(unm=="")
alert("Enter a valid username!");}
function validatepass(pass){
var no=pass.length;
if(no<9){
	alert("Password length should be greater than 8!");
	}
}
</script>
</head>
<body><center>
<h2>Make required changes in faculty details</h2>
<form action="finalfacultyupdate.php" method="post"><b>
FACULTY NAME:<input type="text" name="facultyname1" onblur="validatename(this.value)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
USERNAME:<input type="text" name="username1" onblur="validateusername(this.value)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
PASSWORD:<input type="password" name="pass1" onblur="validatepass(this.value)"><br><br><br>

CLASS 1 :<select name="class1">
<option value="--">--</option>
<option value="se_a">SE-A</option>
<option value="se_b">SE-B</option>
<option value="se_c">SE-C</option>
<option value="te_a">TE-A</option>
<option value="te_b">TE-B</option>
<option value="te_c">TE-C</option>
</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
SUBJECT :<select name="sub1">
<option value="--">--</option>
<option value="AM_III">Applied Mathematics III</option>
<option value="ECCF">ECCF</option>
<option value="DS">DS</option>
<option value="DLDA">DLDA</option>
<option value="OOPM">OOPM</option>
<option value="DIS">DIS</option>
<option value="MP">MP</option>
<option value="OS">OS</option>
<option value="SOOAD">SOOAD</option>
<option value="CN">CN</option>
<option value="WT">WT</option>
<option value="BCE">BCE</option>
</select><br><br><br>

CLASS 2 :<select name="class2">
<option value="--">--</option>
<option value="se_a">SE-A</option>
<option value="se_b">SE-B</option>
<option value="se_c">SE-C</option>
<option value="te_a">TE-A</option>
<option value="te_b">TE-B</option>
<option value="te_c">TE-C</option>
</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
SUBJECT :<select name="sub2">
<option value="--">--</option>
<option value="AM_III">Applied Mathematics III</option>
<option value="ECCF">ECCF</option>
<option value="DS">DS</option>
<option value="DLDA">DLDA</option>
<option value="OOPM">OOPM</option>
<option value="DIS">DIS</option>
<option value="MP">MP</option>
<option value="OS">OS</option>
<option value="SOOAD">SOOAD</option>
<option value="CN">CN</option>
<option value="WT">WT</option>
<option value="BCE">BCE</option>
</select><br><br><br>

CLASS 3 :<select name="class3">
<option value="--">--</option>
<option value="se_a">SE-A</option>
<option value="se_b">SE-B</option>
<option value="se_c">SE-C</option>
<option value="te_a">TE-A</option>
<option value="te_b">TE-B</option>
<option value="te_c">TE-C</option>
</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
SUBJECT :<select name="sub3">
<option value="--">--</option>
<option value="AM_III">Applied Mathematics III</option>
<option value="ECCF">ECCF</option>
<option value="DS">DS</option>
<option value="DLDA">DLDA</option>
<option value="OOPM">OOPM</option>
<option value="DIS">DIS</option>
<option value="MP">MP</option>
<option value="OS">OS</option>
<option value="SOOAD">SOOAD</option>
<option value="CN">CN</option>
<option value="WT">WT</option>
<option value="BCE">BCE</option>
</select><br><br><br></b>
<input type="submit" class="button button1" value="UPDATE FACULTY DETAILS"><br><br><br></center>
</form>
</body>
</html>