<?php
include_once('connection.php');

$query="select * from odimob";
$resul=mysql_query($query);
$s="localhost";
$u="root";
$p="";
$d="piyush";
$conn=mysqli_connect($s,$u,$p,$d);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Canvas</title>
    <style>
      body {
        margin: 0;
        overflow: hidden;
      }
    </style>
  </head>
  <body>

    <canvas class="myCanvas" >
      <p>Add suitable fallback here.</p></canvas>
    

    <script language="javascript" type="text/javascript">
var i,j;
var a,b,c,d,e,f,g,h;
var a=localStorage.getItem("a");
var b=localStorage.getItem("b");
var c=localStorage.getItem("c");
var d=localStorage.getItem("d");
var f=localStorage.getItem("f");
var g=localStorage.getItem("g");
var h=localStorage.getItem("h");


      const canvas = document.querySelector('.myCanvas');
      const width = canvas.width = window.innerWidth;
      const height = canvas.height = window.innerHeight;
     const ctx = canvas.getContext('2d');
	 var c=0;
<?php
$i=0;
while($rows=mysql_fetch_assoc($resul))
{

?>


ctx.fillStyle = 'rgb(2,2,0)'; 
ctx.font = 'bold 200px _sans';
//ctx.fillText ('<?php echo $rows['Rank']; ?>', 300, 303);
ctx.fillText ('<?php echo $i; ?>', 700, 303);



<?php
/*if($i>-1){
break;}*/

$i++;
}
?>
<?php
$budget="<script>document.write(budget)</script>"
$sql="UPDATE odimob  SL=18 WHERE COST=558";
mysqli_query($conn,$sql);
?>








    </script>

  </body>
</html>