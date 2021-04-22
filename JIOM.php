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
<?php

$query="SELECT * FROM `odimob` WHERE BRAND='JIO' ORDER BY VIEWS DESC";
$resul=mysql_query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-image: url("pg2bg2.jpg");
        background-repeat:no-repeat;
        background-attachment: absolute;
    }
    
</style>
<body>
<canvas class="myCanvas">
      <p>Add suitable fallback here.</p>
    </canvas>

    <script language="javascript" type="text/javascript">
var i,j;


	

      const canvas = document.querySelector('.myCanvas');
      const width = canvas.width = 1900;
      const height = canvas.height = 2120;
     const ctx = canvas.getContext('2d');
	 var x=0;
	 
	 <?php
$i=0;

while($rows=mysql_fetch_assoc($resul))
{

?>

if(x==0){
	var aa='<?php echo $rows['BRAND']; ?>';
	var ab=<?php echo $rows['COST']; ?>;
	var a=<?php echo $rows['VIEWS']; ?>;
}
else if(x==1){
var ba='<?php echo $rows['BRAND']; ?>';
	var bb=<?php echo $rows['COST']; ?>;
var b=<?php echo $rows['VIEWS']; ?>;	
}
else if(x==2){
var ca='<?php echo $rows['BRAND']; ?>';
	var cb=<?php echo $rows['COST']; ?>;	
	var c=<?php echo $rows['VIEWS']; ?>;
}



x=x+1;
<?php
if($i>1){
break;}

$i++;
}
?>
var bac='rgb(5,159,11)';
	 var coa='rgb(213,239,212)';
	 var cob='rgb(238,252,239)';
	 var coc='rgb(56,169,61)';
	 
	 ctx.fillStyle = bac;
	 ctx.fillRect(0,400,2000,1900);
var x,y,u,v,q,ua,ub,uc;
ua=(b*1700)/(a+b+c);
x=100;
u=(ua/1.11);
v=(u*(0.57));
y=1500-v;
q=(u*(0.02));
r=(u*(0.11));
l=(5/r);
m=(48/r);
n=(8/r);
g=0;
w=111;
z=3;
for(i=0;i<width;i++){
for(j=0;j<height;j++){

if(j>y&&j<y+v&&i>x&&i<x+u){
//middle

ctx.fillStyle = coa;
      ctx.fillRect(i,j,1,1);
}
else if((i-x-q)*(i-x-q)+(j-y)*(j-y)<q*q||(i-(x+u-q))*(i-(x+u-q))+(j-y)*(j-y)<q*q||(i>x+q-1&&i<(x+u-q+1)&&j>y-q-1&&j<y+1)){
//top
ctx.fillStyle = cob;
      ctx.fillRect(i,j,1,1);
}
else if((i-(x+q))*(i-(x+q))+(j-y-v)*(j-y-v)<q*q||(i-(x+u-q))*(i-(x+u-q))+(j-y-v)*(j-y-v)<q*q||(i>x+q-1&&i<x+u-q+1&&j>y+v-1&&j<y+v+q)){
//bottom
ctx.fillStyle = coc;
ctx.fillRect(i,j,1,1);
}

else if(i-j<=x+u-y&&i-j>=x+u-y-v&&i<=x+u+r&&i>=x+u){
//right
ctx.fillStyle = "rgb("+(g+((i-x-u)*l))+","+(w+(i-x-u)*m)+","+(z+(i-x-u)*n)+")";
      ctx.fillRect(i,j,1,1);
}
else if(i-j>=x-y-v&&i-j<=x+u-y-v&&j<=y+v+r&&j>=y+v){
//below
ctx.fillStyle = "rgb("+(g+((j-y-v)*l))+","+(w+(j-y-v)*m)+","+(z+(j-y-v)*n)+")";
      ctx.fillRect(i,j,1,1);
}

}}
ctx.fillStyle = bac; 
ctx.font = 'bold '+(u/7)+'px _sans';
ctx.fillText (ba, x+(u/3), y+(u/7)+(u/12));    
ctx.fillStyle = bac; 
ctx.font = 'bold '+(u/7)+'px _sans';
ctx.fillText (bb, x+(u/2.5), y+(u/7)+(u/5)+(u/12));   








ub=(1700*a)/(a+b+c);
x=100+ua;
u=(ub/1.11);
v=(u*(0.57));
y=1500-v;
q=(u*(0.02));
r=(u*(0.11));
l=(5/r);
m=(48/r);
n=(8/r);
for(i=0;i<width;i++){
for(j=0;j<height;j++){

if(j>y&&j<y+v&&i>x&&i<x+u){
//middle
ctx.fillStyle = coa;
      ctx.fillRect(i,j,1,1);
}
else if((i-x-q)*(i-x-q)+(j-y)*(j-y)<q*q||(i-(x+u-q))*(i-(x+u-q))+(j-y)*(j-y)<q*q||(i>x+q-1&&i<(x+u-q+1)&&j>y-q-1&&j<y+1)){
//top
ctx.fillStyle = cob;
      ctx.fillRect(i,j,1,1);
}
else if((i-(x+q))*(i-(x+q))+(j-y-v)*(j-y-v)<q*q||(i-(x+u-q))*(i-(x+u-q))+(j-y-v)*(j-y-v)<q*q||(i>x+q-1&&i<x+u-q+1&&j>y+v-1&&j<y+v+q)){
//bottom
ctx.fillStyle = coc;
ctx.fillRect(i,j,1,1);
}

else if(i-j<=x+u-y&&i-j>=x+u-y-v&&i<=x+u+r&&i>=x+u){
//right
ctx.fillStyle = "rgb("+(g+((i-x-u)*l))+","+(w+(i-x-u)*m)+","+(z+(i-x-u)*n)+")";
      ctx.fillRect(i,j,1,1);
}
else if(i-j>=x-y-v&&i-j<=x+u-y-v&&j<=y+v+r&&j>=y+v){
//below
ctx.fillStyle = "rgb("+(g+((j-y-v)*l))+","+(w+(j-y-v)*m)+","+(z+(j-y-v)*n)+")";
      ctx.fillRect(i,j,1,1);
}

}}
ctx.fillStyle = bac; 
ctx.font = 'bold '+(u/7)+'px _sans';
ctx.fillText (aa, x+(u/3), y+(u/7)+(u/12));    
ctx.fillStyle = bac; 
ctx.font = 'bold '+(u/7)+'px _sans';
ctx.fillText (ab, x+(u/2.5), y+(u/7)+(u/5)+(u/12));   







uc=(1700*c)/(a+b+c);
x=100+ua+ub;
u=uc/1.11;
v=(u*(0.57));
y=1500-v;
q=(u*(0.02));
r=(u*(0.11));
l=(5/r);
m=(48/r);
n=(8/r);
for(i=0;i<width;i++){
for(j=0;j<height;j++){


if(j>y&&j<y+v&&i>x&&i<x+u){
//middle
ctx.fillStyle = coa;
      ctx.fillRect(i,j,1,1);
}
else if((i-x-q)*(i-x-q)+(j-y)*(j-y)<q*q||(i-(x+u-q))*(i-(x+u-q))+(j-y)*(j-y)<q*q||(i>x+q-1&&i<(x+u-q+1)&&j>y-q-1&&j<y+1)){
//top
ctx.fillStyle = cob;
      ctx.fillRect(i,j,1,1);
}
else if((i-(x+q))*(i-(x+q))+(j-y-v)*(j-y-v)<q*q||(i-(x+u-q))*(i-(x+u-q))+(j-y-v)*(j-y-v)<q*q||(i>x+q-1&&i<x+u-q+1&&j>y+v-1&&j<y+v+q)){
//bottom
ctx.fillStyle=coc;
ctx.fillRect(i,j,1,1);
}

else if(i-j<=x+u-y&&i-j>=x+u-y-v&&i<=x+u+r&&i>=x+u){
//right
ctx.fillStyle = "rgb("+(g+((i-x-u)*l))+","+(w+(i-x-u)*m)+","+(z+(i-x-u)*n)+")";
      ctx.fillRect(i,j,1,1);
}
else if(i-j>=x-y-v&&i-j<=x+u-y-v&&j<=y+v+r&&j>=y+v){
//below
ctx.fillStyle = "rgb("+(g+((j-y-v)*l))+","+(w+(j-y-v)*m)+","+(z+(j-y-v)*n)+")";
      ctx.fillRect(i,j,1,1);
}

}}
ctx.fillStyle = bac; 
ctx.font = 'bold '+(u/7)+'px _sans';
ctx.fillText (ca, x+(u/3), y+(u/7)+(u/12));    
ctx.fillStyle = bac; 
ctx.font = 'bold '+(u/7)+'px _sans';
ctx.fillText (cb, x+(u/2.5), y+(u/7)+(u/5)+(u/12));   

for(i=100;i<=600;i++){
	for(j=1700;j<=2100;j++){
		if((((i-350)*(i-350))+((j-1750)*(j-1750))<=1600)){
		ctx.fillStyle = bac;
		ctx.fillRect(i,j,1,1);
			
		}
		
		else if((((i-200)*(i-200))+((j-1800)*(j-1800))>=10000&&i<200&&j<1800)||(((i-500)*(i-500))+((j-2000)*(j-2000))>=10000&&i>500&&j>2000)){
		ctx.fillStyle = bac;
		ctx.fillRect(i,j,1,1);}
	
	else{
		ctx.fillStyle = coa;
		ctx.fillRect(i,j,1,1);
		ctx.fillRect(i+600,j,1,1);
		ctx.fillRect(i+1200,j,1,1);
	}
}}
 ctx.fillStyle = coa; 
ctx.font = 'bold 70px _sans';
ctx.fillText ("1", 334, 1770);       
	ctx.fillText ("2", 934, 1770); 
	ctx.fillText ("3", 1534, 1770); 
	var x=0;
	 <?php
$i=0;
$query="SELECT * FROM `odimob` WHERE BRAND='JIO' ORDER BY VIEWS DESC";
$resul=mysql_query($query);

while($rows=mysql_fetch_assoc($resul))
{

?>


ctx.fillStyle = bac;
ctx.font = 'bold 50px _sans';
ctx.fillText ('<?php echo $rows['BRAND']; ?>', 290+x,1840);
ctx.fillText ("Rs "+'<?php echo $rows['COST']; ?>', 280+x,1890);
var y=<?php echo $rows['DATA']; ?>/1024;
ctx.fillText (y.toFixed(0)+" GB DATA", 220+x,1940);
if(<?php echo $rows['MINS']; ?><500){
ctx.fillText ('<?php echo $rows['MINS']; ?>'+" MINS", 240+x,1990);	
}
else{
ctx.fillText ("UNLIMITED MINS", 140+x,1990);	
}
ctx.fillText ('<?php echo $rows['DAY']; ?>'+" DAYS", 230+x,2040);

x=x+600;
<?php
if($i>1){
break;}

$i++;
}
?>

/*ctx.fillStyle = 'rgb(203,187,13)';
ctx.font = 'bold 50px _sans';
ctx.fillText ("BSNL", 290,1840);
ctx.fillText ("Rs 999", 280,1890);
//ctx.fillText ("3 GB DATA", 220,1940);
ctx.fillText ("500 GB FUP LIMIT", 140,1940);
//ctx.fillText ("500 MINS", 240,1990);
//ctx.fillText ("UNLIMITED MINS", 140,1990);
ctx.fillText ("1024 mbps", 230,1990);
//ctx.fillText ("360 DAY(S)", 230,2040);
ctx.fillText ("24 MONTH(S)", 200,2040);*/











    </script>






    










</body>
</html>