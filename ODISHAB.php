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
<?php
if(isset($_POST["num1"])){
$min=$_POST["num1"];}
else{
$min=0;
}
if(isset($_POST["num2"])){
$data=$_POST["num2"];}
else{
$data=0;}
if(isset($_POST["num3"])){
$day=$_POST["num3"];}
else{
$day=0;}


if(isset($_POST["JIO"])){
$jio=1;
}
else{
$jio=0;
}
if(isset($_POST["BSNL"])){
$bsnl=1;
}
else{
$bsnl=0;
}

if(isset($_POST["AIRTEL"])){
$airtel=1;
}
else{
$airtel=0;
}
$sql="UPDATE odibro SET DIST=((((COST/MONTH)-($day))/1)*(((COST/MONTH)-($day))/1))+(((DATA/1)-$data)*((DATA/1)-$data))+(((SPEED-$min)/1)*((SPEED-$min)/1)) WHERE 1";
mysqli_query($conn,$sql);
$sql="UPDATE odibro SET DIST=DIST+1000000000000 WHERE SPEED<$min*0.9";
mysqli_query($conn,$sql);
$sql="UPDATE odibro SET DIST=DIST+1000000000000 WHERE DATA<$data*0.9";
mysqli_query($conn,$sql);
$sql="UPDATE odibro SET DIST=DIST+1000000000000 WHERE (COST/MONTH)>($day)*1.2";
mysqli_query($conn,$sql);
if($jio==0){
$sql="UPDATE odibro SET DIST=DIST+100000000000000 WHERE BRAND='JIO'";
mysqli_query($conn,$sql);}

if($airtel==0){
$sql="UPDATE odibro SET DIST=DIST+100000000000000 WHERE BRAND='AIRTEL'";
mysqli_query($conn,$sql);}
if($bsnl==0){
$sql="UPDATE odibro SET DIST=DIST+100000000000000 WHERE BRAND='BSNL'";
mysqli_query($conn,$sql);}
$query="select * from odibro ORDER BY DIST";
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
        background-image: url("NEW.jpg");
        background-repeat:no-repeat;
        background-attachment: absolute;
	    background-size: cover;
    }
    
</style>
<body>
<canvas class="myCanvas">
      <p>Add suitable fallback here.</p>
    </canvas>

    <script language="javascript" type="text/javascript">
var i,j;




      const canvas = document.querySelector('.myCanvas');
       const width = canvas.width = 1800;
      const height = canvas.height = 4500;
     const ctx = canvas.getContext('2d');
/*var x=300,y=500,l=1300,m=600,a,b,c,d;
	 a=x+20;
	 b=y+20;
	 c=x+l-20;
	 d=y+m-20;

for(i=x;i<=x+l;i++){
for(j=y;j<=y+m;j++){

if(((i-a)*(i-a)+(j-b)*(j-b)>400&&i<=a&&j<=b)||((i-c)*(i-c)+(j-b)*(j-b)>400&&i>=c&&j<=b)
||(((i-a)*(i-a)+(j-d)*(j-d)>400&&i<=a&&j>=d)||((i-c)*(i-c)+(j-d)*(j-d)>400&&i>=c&&j>=d))){
ctx.fillStyle = "rgb(255,255,255)";
      ctx.fillRect(i,j,1,1);}
	  else if(i<307||((i-a)*(i-a)+(j-b+3)*(j-b+3)>196&&i<=a&&j<=b)){
	  ctx.fillStyle = "rgb(47,47,47)";
      ctx.fillRect(i,j,1,1);
	  }
	  else if(i<325){
	  ctx.fillStyle = "rgb("+(163-((i-307)*(3.41)))+","+(163-((i-307)*(3.41)))+","+(163-((i-307)*(3.41)))+")";
      ctx.fillRect(i,j,1,1);
	  }
	  else if(i>1594){
	  ctx.fillStyle = "rgb(83,83,83)";
      ctx.fillRect(i,j,1,1);
	  }
	  
	  else {
	  ctx.fillStyle = "rgb("+(105-((i-325)*(0.0285)))+","+(105-((i-325)*(0.0285)))+","+(105-((i-325)*(0.0285)))+")";
      ctx.fillRect(i,j,1,1);
	  
	  }
	  }}
	  var x=150,y=50,a=515,b=600,l,m,n;
	  l=x/(30.0);
	  m=x/(60.0);
	  n=(166)/(x);
for(i=a-x-50;i<=a+x+50;i++){
for(j=b-y-50;j<=b+y+50;j++){
if((((i-a+m)*(i-a+m))/(x*x)+((j-b+m)*(j-b+m))/(y*y)<=1)&&(((i-a)*(i-a))/((x-m)*(x-m))+((j-b)*(j-b))/((y-m)*(y-m))>=1)){
ctx.fillStyle = "rgb("+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+")";

      ctx.fillRect(i,j,1,1);
}
else if((((i-a)*(i-a))/(x*x)+((j-b)*(j-b))/(y*y)<=1)){
 ctx.fillStyle = "rgb(67,67,67)";
      ctx.fillRect(i,j,1,1);
}
else if((((i-a-2*m)*(i-a-2*m))/((x+l)*(x+l))+((j-b-2*m)*(j-b-2*m))/((y+l)*(y+l))<=1)){
 ctx.fillStyle = "rgb(45,45,45)";
      ctx.fillRect(i,j,1,1);
}
}
}
var x=150,y=50,a=950,b=600,l,m,n;
	  l=x/(30.0);
	  m=x/(60.0);
	  n=(166)/x;
for(i=a-x-50;i<=a+x+50;i++){
for(j=b-y-50;j<=b+y+50;j++){
if((((i-a+m)*(i-a+m))/(x*x)+((j-b+m)*(j-b+m))/(y*y)<=1)&&(((i-a)*(i-a))/((x-m)*(x-m))+((j-b)*(j-b))/((y-m)*(y-m))>=1)){
ctx.fillStyle = "rgb("+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+")";

      ctx.fillRect(i,j,1,1);
}
else if((((i-a)*(i-a))/(x*x)+((j-b)*(j-b))/(y*y)<=1)){
 ctx.fillStyle = "rgb(67,67,67)";
      ctx.fillRect(i,j,1,1);
}
else if((((i-a-2*m)*(i-a-2*m))/((x+l)*(x+l))+((j-b-2*m)*(j-b-2*m))/((y+l)*(y+l))<=1)){
 ctx.fillStyle = "rgb(45,45,45)";
      ctx.fillRect(i,j,1,1);
}
}
}
var x=150,y=50,a=1385,b=600,l,m,n;
	  l=x/(30.0);
	  m=x/(60.0);
	  n=(166)/x;
for(i=a-x-50;i<=a+x+50;i++){
for(j=b-y-50;j<=b+y+50;j++){
if((((i-a+m)*(i-a+m))/(x*x)+((j-b+m)*(j-b+m))/(y*y)<=1)&&(((i-a)*(i-a))/((x-m)*(x-m))+((j-b)*(j-b))/((y-m)*(y-m))>=1)){
ctx.fillStyle = "rgb("+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+")";

      ctx.fillRect(i,j,1,1);
}
else if((((i-a)*(i-a))/(x*x)+((j-b)*(j-b))/(y*y)<=1)){
 ctx.fillStyle = "rgb(67,67,67)";
      ctx.fillRect(i,j,1,1);
}
else if((((i-a-2*m)*(i-a-2*m))/((x+l)*(x+l))+((j-b-2*m)*(j-b-2*m))/((y+l)*(y+l))<=1)){
 ctx.fillStyle = "rgb(45,45,45)";
      ctx.fillRect(i,j,1,1);
}
}
}
var x=100,y=50,a=430,b=800,l,m,n;
	  l=x/(30.0);
	  m=x/(60.0);
	  n=(166)/x;
for(i=a-x-50;i<=a+x+50;i++){
for(j=b-y-50;j<=b+y+50;j++){
if((((i-a+m)*(i-a+m))/(x*x)+((j-b+m)*(j-b+m))/(y*y)<=1)&&(((i-a)*(i-a))/((x-m)*(x-m))+((j-b)*(j-b))/((y-m)*(y-m))>=1)){
ctx.fillStyle = "rgb("+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+")";

      ctx.fillRect(i,j,1,1);
}
else if((((i-a)*(i-a))/(x*x)+((j-b)*(j-b))/(y*y)<=1)){
 ctx.fillStyle = "rgb(67,67,67)";
      ctx.fillRect(i,j,1,1);
}
else if((((i-a-2*m)*(i-a-2*m))/((x+l)*(x+l))+((j-b-2*m)*(j-b-2*m))/((y+l)*(y+l))<=1)){
 ctx.fillStyle = "rgb(45,45,45)";
      ctx.fillRect(i,j,1,1);
}
}
}
var x=100,y=50,a=690,b=800,l,m,n;
	  l=x/(30.0);
	  m=x/(60.0);
	  n=(166)/x;
for(i=a-x-50;i<=a+x+50;i++){
for(j=b-y-50;j<=b+y+50;j++){
if((((i-a+m)*(i-a+m))/(x*x)+((j-b+m)*(j-b+m))/(y*y)<=1)&&(((i-a)*(i-a))/((x-m)*(x-m))+((j-b)*(j-b))/((y-m)*(y-m))>=1)){
ctx.fillStyle = "rgb("+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+")";

      ctx.fillRect(i,j,1,1);
}
else if((((i-a)*(i-a))/(x*x)+((j-b)*(j-b))/(y*y)<=1)){
 ctx.fillStyle = "rgb(67,67,67)";
      ctx.fillRect(i,j,1,1);
}
else if((((i-a-2*m)*(i-a-2*m))/((x+l)*(x+l))+((j-b-2*m)*(j-b-2*m))/((y+l)*(y+l))<=1)){
 ctx.fillStyle = "rgb(45,45,45)";
      ctx.fillRect(i,j,1,1);
}
}
}
var x=100,y=50,a=950,b=800,l,m,n;
	  l=x/(30.0);
	  m=x/(60.0);
	  n=(166)/x;
for(i=a-x-50;i<=a+x+50;i++){
for(j=b-y-50;j<=b+y+50;j++){
if((((i-a+m)*(i-a+m))/(x*x)+((j-b+m)*(j-b+m))/(y*y)<=1)&&(((i-a)*(i-a))/((x-m)*(x-m))+((j-b)*(j-b))/((y-m)*(y-m))>=1)){
ctx.fillStyle = "rgb("+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+")";

      ctx.fillRect(i,j,1,1);
}
else if((((i-a)*(i-a))/(x*x)+((j-b)*(j-b))/(y*y)<=1)){
 ctx.fillStyle = "rgb(67,67,67)";
      ctx.fillRect(i,j,1,1);
}
else if((((i-a-2*m)*(i-a-2*m))/((x+l)*(x+l))+((j-b-2*m)*(j-b-2*m))/((y+l)*(y+l))<=1)){
 ctx.fillStyle = "rgb(45,45,45)";
      ctx.fillRect(i,j,1,1);
}
}
}
var x=100,y=50,a=1210,b=800,l,m,n;
	  l=x/(30.0);
	  m=x/(60.0);
	  n=(166)/x;
for(i=a-x-50;i<=a+x+50;i++){
for(j=b-y-50;j<=b+y+50;j++){
if((((i-a+m)*(i-a+m))/(x*x)+((j-b+m)*(j-b+m))/(y*y)<=1)&&(((i-a)*(i-a))/((x-m)*(x-m))+((j-b)*(j-b))/((y-m)*(y-m))>=1)){
ctx.fillStyle = "rgb("+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+")";

      ctx.fillRect(i,j,1,1);
}
else if((((i-a)*(i-a))/(x*x)+((j-b)*(j-b))/(y*y)<=1)){
 ctx.fillStyle = "rgb(67,67,67)";
      ctx.fillRect(i,j,1,1);
}
else if((((i-a-2*m)*(i-a-2*m))/((x+l)*(x+l))+((j-b-2*m)*(j-b-2*m))/((y+l)*(y+l))<=1)){
 ctx.fillStyle = "rgb(45,45,45)";
      ctx.fillRect(i,j,1,1);
}
}
} 
 var x=100,y=100,a=1450,b=900,l,m,n;
	  l=x/(30.0);
	  m=x/(60.0);
	  n=(166)/x;
for(i=a-x-50;i<=a+x+50;i++){
for(j=b-y-50;j<=b+y+50;j++){
if((((i-a+m)*(i-a+m))/(x*x)+((j-b+m)*(j-b+m))/(y*y)<=1)&&(((i-a)*(i-a))/((x-m)*(x-m))+((j-b)*(j-b))/((y-m)*(y-m))>=1)){
ctx.fillStyle = "rgb("+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+")";

      ctx.fillRect(i,j,1,1);
}
else if((((i-a)*(i-a))/(x*x)+((j-b)*(j-b))/(y*y)<=1)){
 ctx.fillStyle = "rgb(67,67,67)";
      ctx.fillRect(i,j,1,1);
}
else if((((i-a-2*m)*(i-a-2*m))/((x+l)*(x+l))+((j-b-2*m)*(j-b-2*m))/((y+l)*(y+l))<=1)){
 ctx.fillStyle = "rgb(45,45,45)";
      ctx.fillRect(i,j,1,1);
}
}
}
var x=100,y=50,a=430,b=1000,l,m,n;
	  l=x/(30.0);
	  m=x/(60.0);
	  n=(166)/x;
for(i=a-x-50;i<=a+x+50;i++){
for(j=b-y-50;j<=b+y+50;j++){
if((((i-a+m)*(i-a+m))/(x*x)+((j-b+m)*(j-b+m))/(y*y)<=1)&&(((i-a)*(i-a))/((x-m)*(x-m))+((j-b)*(j-b))/((y-m)*(y-m))>=1)){
ctx.fillStyle = "rgb("+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+")";

      ctx.fillRect(i,j,1,1);
}
else if((((i-a)*(i-a))/(x*x)+((j-b)*(j-b))/(y*y)<=1)){
 ctx.fillStyle = "rgb(67,67,67)";
      ctx.fillRect(i,j,1,1);
}
else if((((i-a-2*m)*(i-a-2*m))/((x+l)*(x+l))+((j-b-2*m)*(j-b-2*m))/((y+l)*(y+l))<=1)){
 ctx.fillStyle = "rgb(45,45,45)";
      ctx.fillRect(i,j,1,1);
}
}
}
var x=100,y=50,a=690,b=1000,l,m,n;
	  l=x/(30.0);
	  m=x/(60.0);
	  n=(166)/x;
for(i=a-x-50;i<=a+x+50;i++){
for(j=b-y-50;j<=b+y+50;j++){
if((((i-a+m)*(i-a+m))/(x*x)+((j-b+m)*(j-b+m))/(y*y)<=1)&&(((i-a)*(i-a))/((x-m)*(x-m))+((j-b)*(j-b))/((y-m)*(y-m))>=1)){
ctx.fillStyle = "rgb("+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+")";

      ctx.fillRect(i,j,1,1);
}
else if((((i-a)*(i-a))/(x*x)+((j-b)*(j-b))/(y*y)<=1)){
 ctx.fillStyle = "rgb(67,67,67)";
      ctx.fillRect(i,j,1,1);
}
else if((((i-a-2*m)*(i-a-2*m))/((x+l)*(x+l))+((j-b-2*m)*(j-b-2*m))/((y+l)*(y+l))<=1)){
 ctx.fillStyle = "rgb(45,45,45)";
      ctx.fillRect(i,j,1,1);
}
}
}
var x=100,y=50,a=950,b=1000,l,m,n;
	  l=x/(30.0);
	  m=x/(60.0);
	  n=(166)/x;
for(i=a-x-50;i<=a+x+50;i++){
for(j=b-y-50;j<=b+y+50;j++){
if((((i-a+m)*(i-a+m))/(x*x)+((j-b+m)*(j-b+m))/(y*y)<=1)&&(((i-a)*(i-a))/((x-m)*(x-m))+((j-b)*(j-b))/((y-m)*(y-m))>=1)){
ctx.fillStyle = "rgb("+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+")";

      ctx.fillRect(i,j,1,1);
}
else if((((i-a)*(i-a))/(x*x)+((j-b)*(j-b))/(y*y)<=1)){
 ctx.fillStyle = "rgb(67,67,67)";
      ctx.fillRect(i,j,1,1);
}
else if((((i-a-2*m)*(i-a-2*m))/((x+l)*(x+l))+((j-b-2*m)*(j-b-2*m))/((y+l)*(y+l))<=1)){
 ctx.fillStyle = "rgb(45,45,45)";
      ctx.fillRect(i,j,1,1);
}
}
}
var x=100,y=50,a=1210,b=1000,l,m,n;
	  l=x/(30.0);
	  m=x/(60.0);
	  n=(166)/x;
for(i=a-x-50;i<=a+x+50;i++){
for(j=b-y-50;j<=b+y+50;j++){
if((((i-a+m)*(i-a+m))/(x*x)+((j-b+m)*(j-b+m))/(y*y)<=1)&&(((i-a)*(i-a))/((x-m)*(x-m))+((j-b)*(j-b))/((y-m)*(y-m))>=1)){
ctx.fillStyle = "rgb("+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+")";

      ctx.fillRect(i,j,1,1);
}
else if((((i-a)*(i-a))/(x*x)+((j-b)*(j-b))/(y*y)<=1)){
 ctx.fillStyle = "rgb(67,67,67)";
      ctx.fillRect(i,j,1,1);
}
else if((((i-a-2*m)*(i-a-2*m))/((x+l)*(x+l))+((j-b-2*m)*(j-b-2*m))/((y+l)*(y+l))<=1)){
 ctx.fillStyle = "rgb(45,45,45)";
      ctx.fillRect(i,j,1,1);
}
}
} 







var x=300,y=1300,l=1300,m=600,a,b,c,d;
	 a=x+20;
	 b=y+20;
	 c=x+l-20;
	 d=y+m-20;

for(i=x;i<=x+l;i++){
for(j=y;j<=y+m;j++){

if(((i-a)*(i-a)+(j-b)*(j-b)>400&&i<=a&&j<=b)||((i-c)*(i-c)+(j-b)*(j-b)>400&&i>=c&&j<=b)
||(((i-a)*(i-a)+(j-d)*(j-d)>400&&i<=a&&j>=d)||((i-c)*(i-c)+(j-d)*(j-d)>400&&i>=c&&j>=d))){
ctx.fillStyle = "rgb(255,255,255)";
      ctx.fillRect(i,j,1,1);}
	  else if(i<307||((i-a)*(i-a)+(j-b+3)*(j-b+3)>196&&i<=a&&j<=b)){
	  ctx.fillStyle = "rgb(47,47,47)";
      ctx.fillRect(i,j,1,1);
	  }
	  else if(i<325){
	  ctx.fillStyle = "rgb("+(163-((i-307)*(3.41)))+","+(163-((i-307)*(3.41)))+","+(163-((i-307)*(3.41)))+")";
      ctx.fillRect(i,j,1,1);
	  }
	  else if(i>1594){
	  ctx.fillStyle = "rgb(83,83,83)";
      ctx.fillRect(i,j,1,1);
	  }
	  
	  else {
	  ctx.fillStyle = "rgb("+(105-((i-325)*(0.0285)))+","+(105-((i-325)*(0.0285)))+","+(105-((i-325)*(0.0285)))+")";
      ctx.fillRect(i,j,1,1);
	  
	  }
	  }}
	  var x=150,y=50,a=515,b=1400,l,m,n;
	  l=x/(30.0);
	  m=x/(60.0);
	  n=(166)/(x);
for(i=a-x-50;i<=a+x+50;i++){
for(j=b-y-50;j<=b+y+50;j++){
if((((i-a+m)*(i-a+m))/(x*x)+((j-b+m)*(j-b+m))/(y*y)<=1)&&(((i-a)*(i-a))/((x-m)*(x-m))+((j-b)*(j-b))/((y-m)*(y-m))>=1)){
ctx.fillStyle = "rgb("+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+")";

      ctx.fillRect(i,j,1,1);
}
else if((((i-a)*(i-a))/(x*x)+((j-b)*(j-b))/(y*y)<=1)){
 ctx.fillStyle = "rgb(67,67,67)";
      ctx.fillRect(i,j,1,1);
}
else if((((i-a-2*m)*(i-a-2*m))/((x+l)*(x+l))+((j-b-2*m)*(j-b-2*m))/((y+l)*(y+l))<=1)){
 ctx.fillStyle = "rgb(45,45,45)";
      ctx.fillRect(i,j,1,1);
}
}
}
var x=150,y=50,a=950,b=1400,l,m,n;
	  l=x/(30.0);
	  m=x/(60.0);
	  n=(166)/x;
for(i=a-x-50;i<=a+x+50;i++){
for(j=b-y-50;j<=b+y+50;j++){
if((((i-a+m)*(i-a+m))/(x*x)+((j-b+m)*(j-b+m))/(y*y)<=1)&&(((i-a)*(i-a))/((x-m)*(x-m))+((j-b)*(j-b))/((y-m)*(y-m))>=1)){
ctx.fillStyle = "rgb("+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+")";

      ctx.fillRect(i,j,1,1);
}
else if((((i-a)*(i-a))/(x*x)+((j-b)*(j-b))/(y*y)<=1)){
 ctx.fillStyle = "rgb(67,67,67)";
      ctx.fillRect(i,j,1,1);
}
else if((((i-a-2*m)*(i-a-2*m))/((x+l)*(x+l))+((j-b-2*m)*(j-b-2*m))/((y+l)*(y+l))<=1)){
 ctx.fillStyle = "rgb(45,45,45)";
      ctx.fillRect(i,j,1,1);
}
}
}
var x=150,y=50,a=1385,b=1400,l,m,n;
	  l=x/(30.0);
	  m=x/(60.0);
	  n=(166)/x;
for(i=a-x-50;i<=a+x+50;i++){
for(j=b-y-50;j<=b+y+50;j++){
if((((i-a+m)*(i-a+m))/(x*x)+((j-b+m)*(j-b+m))/(y*y)<=1)&&(((i-a)*(i-a))/((x-m)*(x-m))+((j-b)*(j-b))/((y-m)*(y-m))>=1)){
ctx.fillStyle = "rgb("+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+")";

      ctx.fillRect(i,j,1,1);
}
else if((((i-a)*(i-a))/(x*x)+((j-b)*(j-b))/(y*y)<=1)){
 ctx.fillStyle = "rgb(67,67,67)";
      ctx.fillRect(i,j,1,1);
}
else if((((i-a-2*m)*(i-a-2*m))/((x+l)*(x+l))+((j-b-2*m)*(j-b-2*m))/((y+l)*(y+l))<=1)){
 ctx.fillStyle = "rgb(45,45,45)";
      ctx.fillRect(i,j,1,1);
}
}
}
var x=100,y=50,a=430,b=1600,l,m,n;
	  l=x/(30.0);
	  m=x/(60.0);
	  n=(166)/x;
for(i=a-x-50;i<=a+x+50;i++){
for(j=b-y-50;j<=b+y+50;j++){
if((((i-a+m)*(i-a+m))/(x*x)+((j-b+m)*(j-b+m))/(y*y)<=1)&&(((i-a)*(i-a))/((x-m)*(x-m))+((j-b)*(j-b))/((y-m)*(y-m))>=1)){
ctx.fillStyle = "rgb("+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+")";

      ctx.fillRect(i,j,1,1);
}
else if((((i-a)*(i-a))/(x*x)+((j-b)*(j-b))/(y*y)<=1)){
 ctx.fillStyle = "rgb(67,67,67)";
      ctx.fillRect(i,j,1,1);
}
else if((((i-a-2*m)*(i-a-2*m))/((x+l)*(x+l))+((j-b-2*m)*(j-b-2*m))/((y+l)*(y+l))<=1)){
 ctx.fillStyle = "rgb(45,45,45)";
      ctx.fillRect(i,j,1,1);
}
}
}
var x=100,y=50,a=690,b=1600,l,m,n;
	  l=x/(30.0);
	  m=x/(60.0);
	  n=(166)/x;
for(i=a-x-50;i<=a+x+50;i++){
for(j=b-y-50;j<=b+y+50;j++){
if((((i-a+m)*(i-a+m))/(x*x)+((j-b+m)*(j-b+m))/(y*y)<=1)&&(((i-a)*(i-a))/((x-m)*(x-m))+((j-b)*(j-b))/((y-m)*(y-m))>=1)){
ctx.fillStyle = "rgb("+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+")";

      ctx.fillRect(i,j,1,1);
}
else if((((i-a)*(i-a))/(x*x)+((j-b)*(j-b))/(y*y)<=1)){
 ctx.fillStyle = "rgb(67,67,67)";
      ctx.fillRect(i,j,1,1);
}
else if((((i-a-2*m)*(i-a-2*m))/((x+l)*(x+l))+((j-b-2*m)*(j-b-2*m))/((y+l)*(y+l))<=1)){
 ctx.fillStyle = "rgb(45,45,45)";
      ctx.fillRect(i,j,1,1);
}
}
}
var x=100,y=50,a=950,b=1600,l,m,n;
	  l=x/(30.0);
	  m=x/(60.0);
	  n=(166)/x;
for(i=a-x-50;i<=a+x+50;i++){
for(j=b-y-50;j<=b+y+50;j++){
if((((i-a+m)*(i-a+m))/(x*x)+((j-b+m)*(j-b+m))/(y*y)<=1)&&(((i-a)*(i-a))/((x-m)*(x-m))+((j-b)*(j-b))/((y-m)*(y-m))>=1)){
ctx.fillStyle = "rgb("+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+")";

      ctx.fillRect(i,j,1,1);
}
else if((((i-a)*(i-a))/(x*x)+((j-b)*(j-b))/(y*y)<=1)){
 ctx.fillStyle = "rgb(67,67,67)";
      ctx.fillRect(i,j,1,1);
}
else if((((i-a-2*m)*(i-a-2*m))/((x+l)*(x+l))+((j-b-2*m)*(j-b-2*m))/((y+l)*(y+l))<=1)){
 ctx.fillStyle = "rgb(45,45,45)";
      ctx.fillRect(i,j,1,1);
}
}
}
var x=100,y=50,a=1210,b=1600,l,m,n;
	  l=x/(30.0);
	  m=x/(60.0);
	  n=(166)/x;
for(i=a-x-50;i<=a+x+50;i++){
for(j=b-y-50;j<=b+y+50;j++){
if((((i-a+m)*(i-a+m))/(x*x)+((j-b+m)*(j-b+m))/(y*y)<=1)&&(((i-a)*(i-a))/((x-m)*(x-m))+((j-b)*(j-b))/((y-m)*(y-m))>=1)){
ctx.fillStyle = "rgb("+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+")";

      ctx.fillRect(i,j,1,1);
}
else if((((i-a)*(i-a))/(x*x)+((j-b)*(j-b))/(y*y)<=1)){
 ctx.fillStyle = "rgb(67,67,67)";
      ctx.fillRect(i,j,1,1);
}
else if((((i-a-2*m)*(i-a-2*m))/((x+l)*(x+l))+((j-b-2*m)*(j-b-2*m))/((y+l)*(y+l))<=1)){
 ctx.fillStyle = "rgb(45,45,45)";
      ctx.fillRect(i,j,1,1);
}
}
} 
 var x=100,y=100,a=1450,b=1700,l,m,n;
	  l=x/(30.0);
	  m=x/(60.0);
	  n=(166)/x;
for(i=a-x-50;i<=a+x+50;i++){
for(j=b-y-50;j<=b+y+50;j++){
if((((i-a+m)*(i-a+m))/(x*x)+((j-b+m)*(j-b+m))/(y*y)<=1)&&(((i-a)*(i-a))/((x-m)*(x-m))+((j-b)*(j-b))/((y-m)*(y-m))>=1)){
ctx.fillStyle = "rgb("+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+")";

      ctx.fillRect(i,j,1,1);
}
else if((((i-a)*(i-a))/(x*x)+((j-b)*(j-b))/(y*y)<=1)){
 ctx.fillStyle = "rgb(67,67,67)";
      ctx.fillRect(i,j,1,1);
}
else if((((i-a-2*m)*(i-a-2*m))/((x+l)*(x+l))+((j-b-2*m)*(j-b-2*m))/((y+l)*(y+l))<=1)){
 ctx.fillStyle = "rgb(45,45,45)";
      ctx.fillRect(i,j,1,1);
}
}
}
var x=100,y=50,a=430,b=1800,l,m,n;
	  l=x/(30.0);
	  m=x/(60.0);
	  n=(166)/x;
for(i=a-x-50;i<=a+x+50;i++){
for(j=b-y-50;j<=b+y+50;j++){
if((((i-a+m)*(i-a+m))/(x*x)+((j-b+m)*(j-b+m))/(y*y)<=1)&&(((i-a)*(i-a))/((x-m)*(x-m))+((j-b)*(j-b))/((y-m)*(y-m))>=1)){
ctx.fillStyle = "rgb("+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+")";

      ctx.fillRect(i,j,1,1);
}
else if((((i-a)*(i-a))/(x*x)+((j-b)*(j-b))/(y*y)<=1)){
 ctx.fillStyle = "rgb(67,67,67)";
      ctx.fillRect(i,j,1,1);
}
else if((((i-a-2*m)*(i-a-2*m))/((x+l)*(x+l))+((j-b-2*m)*(j-b-2*m))/((y+l)*(y+l))<=1)){
 ctx.fillStyle = "rgb(45,45,45)";
      ctx.fillRect(i,j,1,1);
}
}
}
var x=100,y=50,a=690,b=1800,l,m,n;
	  l=x/(30.0);
	  m=x/(60.0);
	  n=(166)/x;
for(i=a-x-50;i<=a+x+50;i++){
for(j=b-y-50;j<=b+y+50;j++){
if((((i-a+m)*(i-a+m))/(x*x)+((j-b+m)*(j-b+m))/(y*y)<=1)&&(((i-a)*(i-a))/((x-m)*(x-m))+((j-b)*(j-b))/((y-m)*(y-m))>=1)){
ctx.fillStyle = "rgb("+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+")";

      ctx.fillRect(i,j,1,1);
}
else if((((i-a)*(i-a))/(x*x)+((j-b)*(j-b))/(y*y)<=1)){
 ctx.fillStyle = "rgb(67,67,67)";
      ctx.fillRect(i,j,1,1);
}
else if((((i-a-2*m)*(i-a-2*m))/((x+l)*(x+l))+((j-b-2*m)*(j-b-2*m))/((y+l)*(y+l))<=1)){
 ctx.fillStyle = "rgb(45,45,45)";
      ctx.fillRect(i,j,1,1);
}
}
}
var x=100,y=50,a=950,b=1800,l,m,n;
	  l=x/(30.0);
	  m=x/(60.0);
	  n=(166)/x;
for(i=a-x-50;i<=a+x+50;i++){
for(j=b-y-50;j<=b+y+50;j++){
if((((i-a+m)*(i-a+m))/(x*x)+((j-b+m)*(j-b+m))/(y*y)<=1)&&(((i-a)*(i-a))/((x-m)*(x-m))+((j-b)*(j-b))/((y-m)*(y-m))>=1)){
ctx.fillStyle = "rgb("+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+")";

      ctx.fillRect(i,j,1,1);
}
else if((((i-a)*(i-a))/(x*x)+((j-b)*(j-b))/(y*y)<=1)){
 ctx.fillStyle = "rgb(67,67,67)";
      ctx.fillRect(i,j,1,1);
}
else if((((i-a-2*m)*(i-a-2*m))/((x+l)*(x+l))+((j-b-2*m)*(j-b-2*m))/((y+l)*(y+l))<=1)){
 ctx.fillStyle = "rgb(45,45,45)";
      ctx.fillRect(i,j,1,1);
}
}
}
var x=100,y=50,a=1210,b=1800,l,m,n;
	  l=x/(30.0);
	  m=x/(60.0);
	  n=(166)/x;
for(i=a-x-50;i<=a+x+50;i++){
for(j=b-y-50;j<=b+y+50;j++){
if((((i-a+m)*(i-a+m))/(x*x)+((j-b+m)*(j-b+m))/(y*y)<=1)&&(((i-a)*(i-a))/((x-m)*(x-m))+((j-b)*(j-b))/((y-m)*(y-m))>=1)){
ctx.fillStyle = "rgb("+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+","+(150-((i-a+x)*(n)))+")";

      ctx.fillRect(i,j,1,1);
}
else if((((i-a)*(i-a))/(x*x)+((j-b)*(j-b))/(y*y)<=1)){
 ctx.fillStyle = "rgb(67,67,67)";
      ctx.fillRect(i,j,1,1);
}
else if((((i-a-2*m)*(i-a-2*m))/((x+l)*(x+l))+((j-b-2*m)*(j-b-2*m))/((y+l)*(y+l))<=1)){
 ctx.fillStyle = "rgb(45,45,45)";
      ctx.fillRect(i,j,1,1);
}
}
} */

var x=0;
<?php
$i=0;
$p=500;
while($rows=mysql_fetch_assoc($resul))
{
//$J=$rows['SL'];
//$sql="UPDATE odibro SET VIEWS=VIEWS+5-$i WHERE SL=$J";
mysqli_query($conn,$sql);
?>

var y=<?php echo (($rows['COST']/$rows['MONTH'])); ?>;
if(y<=<?php echo $day; ?>){
ctx.fillStyle = 'rgb(200,255,200)'; 
ctx.font = 'bold 50px Arial';	
ctx.fillText ("Rs "+ y.toFixed(0), 430, (620+(x)));}		
else{
ctx.fillStyle = 'rgb(255,200,200)'; 
ctx.font = 'bold 50px Arial';	
ctx.fillText ("Rs "+ y.toFixed(0), 430, (620+(x)));	
}
var y=<?php echo ($rows['DATA']); ?>;
if(y>=<?php echo $data; ?>){
ctx.fillStyle = 'rgb(200,255,200)'; 
ctx.font = 'bold 50px Arial';	
ctx.fillText (y +" GB", 860, (620+(x)));}		
else{
ctx.fillStyle = 'rgb(255,200,200)'; 
ctx.font = 'bold 50px Arial';	
ctx.fillText (y +" GB", 860, (620+(x)));	
}
var y=<?php echo $rows['SPEED']; ?>;
if(y>=<?php echo $min; ?>){
	
ctx.fillStyle = 'rgb(200,255,200)'; 
ctx.font = 'bold 50px Arial';	
ctx.fillText (y +"mbps", 1265, (620+(x)));}		
else{
ctx.fillStyle = 'rgb(255,200,200)'; 
ctx.font = 'bold 50px Arial';	
ctx.fillText (y +"mbps", 1265, (620+(x)));	
}
ctx.fillStyle = 'rgb(200,200,255)'; 
ctx.font = 'bold 40px Arial';
ctx.fillText ("BRAND", 360, 815+x);
ctx.fillText ("TYPE", 630, 815+x);
ctx.fillText ("COST", 890, 815+x);
ctx.fillText ("MONTH", 1130, 815+x);
ctx.fillStyle = 'rgb(200,200,200)'; 
ctx.font = 'bold 40px Arial';
ctx.fillText ('<?php echo $rows['BRAND']; ?>', 360, 1015+x);

ctx.fillStyle = 'rgb(200,200,200)'; 
ctx.font = 'bold 25px Arial';
ctx.fillText ('<?php echo $rows['TYPE']; ?>', 605, 1015+x);

ctx.fillStyle = 'rgb(200,200,200)'; 
ctx.font = 'bold 30px Arial';
ctx.fillText ("Rs "+'<?php echo $rows['COST']; ?>', 880, 1015+x);
ctx.fillStyle = 'rgb(200,200,200)'; 
ctx.font = 'bold 40px Arial';
ctx.fillText ('<?php echo $rows['MONTH']; ?>', 1180, 1015+x);
ctx.fillStyle = 'rgb(253,238,85)'; 
ctx.font = 'bold 30px Arial';
ctx.fillText ("RECHARGE", 1360, 915+x);

x=x+800;


<?php
if($i>4){
break;}

$i++;
}
?>

var Links = new Array(); // Links information
        var hoverLink = ""; // Href of the link which cursor points at
        ctx.fillStyle = "rgb(2,255,0)"; // Default blue link color
        ctx.font = "1px Courier New"; // Monospace font for links
        ctx.textBaseline = "top"; // Makes left top point a start point for rendering text

function drawLink(x,y,href,title){
            var linkTitle = title,
                linkX = x,
                linkY = y,
                linkWidth = ctx.measureText(linkTitle).width,
                linkHeight = parseInt(ctx.font); // Get lineheight out of fontsize

            // Draw the link
            ctx.fillText(linkTitle, linkX, linkY);


            // Add mouse listeners
            canvas.addEventListener("mousemove", on_mousemove, false);
            canvas.addEventListener("click", on_click, false);

            // Add link params to array
            Links.push(x + ";" + y + ";" + linkWidth + ";" + linkHeight + ";" + href);
        }
          function on_mousemove (ev) {
            var x, y;

            // Get the mouse position relative to the canvas element
            if (ev.layerX || ev.layerX == 0) { // For Firefox
                x = ev.layerX;
                y = ev.layerY;
            }

            // Link hover
            for (var i = Links.length - 1; i >= 0; i--) {
                var params = new Array();

                // Get link params back from array
                params = Links[i].split(";");

                var linkX = parseInt(params[0]),
                    linkY = parseInt(params[1]),
                    linkWidth = parseInt(params[2]),
                    linkHeight = parseInt(params[3]),
                    linkHref = params[4];

                // Check if cursor is in the link area
                if (x >= linkX && x <= (linkX + linkWidth) && y >= linkY && y <= (linkY + linkHeight)){
                    document.body.style.cursor = "pointer";
                    hoverLink = linkHref;
                    break;
                }
                else {
                    document.body.style.cursor = "";
                    hoverLink = "";
                }
            };
        }

        // Link click
        function on_click(e) {
            if (hoverLink){
                window.open(hoverLink); // Use this to open in new tab
                //window.location = hoverLink; // Use this to open in current window
            }
        }
		for(i=1100;i<=1800;i++){
			for(j=2000;j<=2900;j++){
				if((((i-1450)*(i-1450))+((j-2500)*(j-2500)))<=10000){
				drawLink(i,j,"https://paytm.com/recharge"," ");}}}
				
				for(i=1100;i<=1800;i++){
			for(j=400;j<=1300;j++){
				if((((i-1450)*(i-1450))+((j-900)*(j-900)))<=10000){
				drawLink(i,j,"https://paytm.com/recharge"," ");}}}
				
				for(i=1100;i<=1800;i++){
			for(j=1200;j<=2100;j++){
				if((((i-1450)*(i-1450))+((j-1700)*(j-1700)))<=10000){
				drawLink(i,j,"https://paytm.com/recharge"," ");}}}
				
				for(i=1100;i<=1800;i++){
			for(j=2800;j<=3700;j++){
				if((((i-1450)*(i-1450))+((j-3300)*(j-3300)))<=10000){
				drawLink(i,j,"https://paytm.com/recharge"," ");}}}
				
				for(i=1100;i<=1800;i++){
			for(j=3600;j<=4500;j++){
				if((((i-1450)*(i-1450))+((j-4100)*(j-4100)))<=10000){
				drawLink(i,j,"https://paytm.com/recharge"," ");}}}


	
	</script>
	