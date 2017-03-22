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
$conn=mysqli_connect("localhost","root","","testmarksanalysis");
$sql="select * from $class";
$result=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($result);
$count=1;
if($row=mysqli_fetch_array($result)){
if($rowcount>0){
	while($count<=$rowcount){
		$m[$count]=$_POST[$count];
		$sql1="update $class set $sub=$m[$count] where sr_no=$count";
        $result1=mysqli_query($conn,$sql1);
		$count++;
	}
}
echo "<h1>Marks of ".$class." ".$sub." have been updated successfully!</h1>";
}
else echo mysqli_error($conn);
echo "<h1>Select any option to analyse marks</h1>";
echo '<a href="display_topper.php?class='.$class.'&sub='.$sub.'" style="text-decoration:none;"><h1>Display Topper</h1></a>';
echo '<a href="display_failed.php?class='.$class.'&sub='.$sub.'" style="text-decoration:none;"><h1>Display List of Failed Students</h1></a>';
echo '<a href="display_ascending.php?class='.$class.'&sub='.$sub.'" style="text-decoration:none;"><h1>Display student list based on marks in ascending order</h1></a>';
echo '<a href="display_descending.php?class='.$class.'&sub='.$sub.'" style="text-decoration:none;"><h1>Display student list based on marks in descending order</h1></a>';
echo '<a href="generatetotal.php?class='.$class.'&sub='.$sub.'" style="text-decoration:none;"><h1>Generate Total</h1></a>';
?>
</body>
</html>