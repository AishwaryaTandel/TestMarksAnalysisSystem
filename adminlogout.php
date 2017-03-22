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
<center><img src="raitlogo.jpg" style="width:100 px; height:100px;">
<h1><center><b>RAMRAO ADIK INSTITUTE OF TECHNOLOGY</h1></b></center>
<h1><center><b>TEST MARKS ANALYSIS</h1></b></center>
<center><button class="button button1"><a href="home.html" style="text-decoration:none;"><b>HOME</b></a></button>&nbsp;&nbsp;&nbsp;
<button class="button button1"><a href="t_adminlogin.html" style="text-decoration:none;"><b>ADMIN LOGIN</b></a></button>&nbsp;&nbsp;&nbsp;
<button class="button button1"><a href="t_register.html" style="text-decoration:none;"><b>REGISTER</b></a></button>&nbsp;&nbsp;&nbsp;
<button class="button button1"><a href="t_login.html" style="text-decoration:none;"><b>FACULTY LOGIN</b></a></button>&nbsp;&nbsp;&nbsp;
<button class="button button1"><a href="studentlogin.html" style="text-decoration:none;"><b>STUDENT LOGIN</b></a></button>&nbsp;&nbsp;&nbsp;
<button class="button button1"><a href="about.html" style="text-decoration:none;"><b>ABOUT</b></a></button><br>
<?php
session_start();
unset($_SESSION['adminname']);
unset($_SESSION['adminpass']);
session_destroy();
echo "<h1>Logged out successfully!</h1>";
?>