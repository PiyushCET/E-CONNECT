<html>
<head>
</head>
<body style="background-image:url('pg2bg2.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
<center>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<form action="ODISHAB.php" method="post">
<font color=black><b><big><big><big>ENTER SPEED REQUIREMENT(in mbps)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font><input id="num1" name="num1"><br><br></big></big></big></b>

<font color=black><b><big><big><big>ENTER DATA REQUIREMENT(in gb per month)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font><input id="num2" name="num2"><br><br></big></big></big></b>

<font color=black><b><big><big><big>ENTER YOUR BUDGET(in rupees per month)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font><input id="num3" name="num3"><br><br></big></big></big></b>


<font color=black><b><big><big><big>SELECT YOUR BRANDS<font><br><br></big></big></big></b>
<input type="checkbox" name="AIRTEL" id="num4" value="1"><font color=black><b><big><big><big>AIRTEL&nbsp&nbsp<font></big></big></big></b>

<input type="checkbox" name="JIO" id="num6" value="2"><font color=black><b><big><big><big>JIO&nbsp&nbsp<font></big></big></big></b>

<input type="checkbox" name="BSNL" id="num8" value="3"><font color=black><b><big><big><big>BSNL<font></big></big></big></b>

<br><br><br><br>
<button onclick="submit" style="background-color:blue;" ><h1><font color=white>SEE THE PLANS</h1></button>

</form>



</center>

</body>

</html> 
<?php
include_once('connection.php');

$query="select * from odibro";
$resul=mysql_query($query);
$s="localhost";
$u="root";
$p="";
$d="piyush";
$conn=mysqli_connect($s,$u,$p,$d);



?>