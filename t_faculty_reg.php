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
height:400px; 
width:500px;
}
</style>
</head>
<body background="back1.jpg">
<center><img src="raitlogo.jpg" style="width:100 px; height:100px;"></center>
<center><h1><b>RAMRAO ADIK INSTITUTE OF TECHNOLOGY</h1></b></center>
<center><h1><b>TEST MARKS ANALYSIS</h1></b></center>
<center>
<button class="button button1"><a href="home.html" style="text-decoration:none;"><b>HOME</b></a></button>&nbsp;&nbsp;&nbsp;
<button class="button button1"><a href="t_adminlogin.html" style="text-decoration:none;"><b>ADMIN LOGIN</b></a></button>&nbsp;&nbsp;&nbsp;
<button class="button button1"><a href="t_register.html" style="text-decoration:none;"><b>REGISTER</b></a></button>&nbsp;&nbsp;&nbsp;
<button class="button button1"><a href="t_login.html" style="text-decoration:none;"><b>FACULTY LOGIN</b></a></button>&nbsp;&nbsp;&nbsp;
<button class="button button1"><a href="studentlogin.html" style="text-decoration:none;"><b>STUDENT LOGIN</b></a></button>&nbsp;&nbsp;&nbsp;
<button class="button button1"><a href="about.html" style="text-decoration:none;"><b>ABOUT</b></a></button><br><br>
</body>
<?php
$faculty_name=$_POST['faculty_name'];
$faculty_id=$_POST['faculty_id'];
$email=$_POST['email'];
$contact=$_POST['num'];
$dob=$_POST['dob'];
$pass=$_POST['pwd'];

$conn=mysqli_connect("localhost","root","","testmarksanalysis");
$sql="insert into faculty_reg values('$faculty_name','$faculty_id','$email','$contact','$dob','$pass')";
//$sql1="insert into faculty_login values('$faculty_id','$pass')";
if($faculty_name!='' && $faculty_id!='' && $email!='' && $contact!='' && $dob!='' && $pass!=''){
	if(mysqli_query($conn,$sql)){
		echo "<h2 style='text-align:center'>You have been registered successfully!</h2><br>";
		echo "<h2 style='text-align:center'>Click here to Log in!</h2>";
		echo "<a href='t_login.html' style='text-decoration:none;'><h2 style='text-align:center'>LOG IN</h2></a>";
	}
}
else{
	echo "<h2 style='text-align:center'>Enter details in each field!</h2>";
	}
?>
</html>