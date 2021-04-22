<html>
<head>

<script>
function show(){
var a,b,c,d,e,f,g,h;
a=document.getElementById("num1").value;
b=document.getElementById("num2").value;
c=document.getElementById("num3").value;
d=document.getElementById("num4").checked;
f=document.getElementById("num6").checked;
g=document.getElementById("num7").checked;
h=document.getElementById("num8").checked;



if (a == ''||isNaN(a)||a<0) {alert("ENTER A VALID NUMBER GREATER THAN OR EQUAL TO 0 FOR MINUTES")}
else if (b == ''||isNaN(b)||b<0) {alert("ENTER A VALID NUMBER GREATER THAN OR EQUAL TO 0 FOR DATA")}
else if (c == ''||isNaN(c)||c<0) {alert("ENTER A VALID NUMBER GREATER THAN OR EQUAL TO 0 FOR BUDGET")}
else if (d==false&&f==false&&g==false&&h==false) {alert("SELECT ATLEAST ONE SIM")}
else{

localStorage.setItem("a",a);
localStorage.setItem("b",b);
localStorage.setItem("c",c);
localStorage.setItem("d",d);
localStorage.setItem("f",f);
localStorage.setItem("g",g);
localStorage.setItem("h",h);
window.location.href = "./3rdPage.php?"}
}
</script>
</head>
<body style="background-image:url('pg2bg2.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
<center>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<font color=cyan><b><big><big><big>ENTER CALL REQUIREMENT(in mins per day)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font><input id="num1"><br><br></big></big></big></b>

<font color=cyan><b><big><big><big>ENTER DATA REQUIREMENT(in gb per day)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font><input id="num2"><br><br></big></big></big></b>

<font color=cyan><b><big><big><big>ENTER YOUR BUDGET(in rupees per month)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font><input id="num3"><br><br></big></big></big></b>


<font color=cyan><b><big><big><big>SELECT YOUR SIMS<font><br><br></big></big></big></b>
<input type="radio" name="AIRTEL" id="num4"><font color=white><b><big><big><big>AIRTEL&nbsp&nbsp<font></big></big></big></b>

<input type="radio" name="JIO" id="num6"><font color=white><b><big><big><big>JIO&nbsp&nbsp<font></big></big></big></b>
<input type="radio" name="VODAFONEIDEA" id="num7"><font color=white><b><big><big><big>VODAFONEIDEA&nbsp&nbsp<font></big></big></big></b>
<input type="radio" name="BSNL" id="num8"><font color=white><b><big><big><big>BSNL<font></big></big></big></b>

<br><br><br><br>
<button onclick="show()" style="background-color:blue;" ><h1><font color=white>SEE THE PACKS</h1></button>





</center>

</body>

</html> 