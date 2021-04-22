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


    <canvas class="myCanvas">
      <p>Add suitable fallback here.</p>
    </canvas>

    <script language="javascript" type="text/javascript">
var i,j;



      const canvas = document.querySelector('.myCanvas');
      const width = canvas.width = window.innerWidth;
      const height = canvas.height = window.innerHeight;
     const ctx = canvas.getContext('2d');


for(i=0;i<width;i++){
for(j=0;j<height;j++){
if((((j>=204)&&(j<=i*(0.7260869565217392)+(-382.67826086956524))&&(j<=i*(-0.7260869565217392)+ (996.8869565217391)))||((j<=i*(0.7260869565217392)+(-382.67826086956524)||j<=i*(-0.7260869565217392)+(996.8869565217391))&&(j>=i*(-3.0795454545454546)+(3025.568181818182))&&(j>=i*(3.0795454545454546)+ (-2825.568181818182)))))
{
if((i+j)%(640)<320){
 ctx.fillStyle = "rgb("+(184+((i+j)%320)*0.19)+","+(134+((i+j)%320)*0.33)+","+(11+((i+j)%320)*0.57)+")";
      ctx.fillRect(i,j,1,1);}
if((i+j)%(640)>=320){
 ctx.fillStyle = "rgb("+(245-((i+j)%320)*0.19)+","+(241-((i+j)%320)*0.33)+","+(195-((i+j)%320)*0.57)+")";
      ctx.fillRect(i,j,1,1);} 
}
else if(((i-950)*(i-950)+(j-100)*(j-100)<=225||(i>935&&i<965&&j>100&&j<115)||((i-950)*(i-950)+(j-77)*(j-77)<=64))||
((i-1092)*(i-1092)+(j-204)*(j-204)<=225||(i>1077&&i<1107&&j>204&&j<219)||((i-1092)*(i-1092)+(j-181)*(j-181)<=64))||
((i-808)*(i-808)+(j-204)*(j-204)<=225||(i>793&&i<823&&j>204&&j<219)||((i-808)*(i-808)+(j-181)*(j-181)<=64))||
((i-1038)*(i-1038)+(j-394)*(j-394)<=225||(i>1023&&i<1053&&j>394&&j<409)||((i-1038)*(i-1038)+(j-371)*(j-371)<=64))||((i-862)*(i-862)+(j-394)*(j-394)<=225||(i>847&&i<877&&j>394&&j<409)||((i-862)*(i-862)+(j-371)*(j-371)<=64))){
 if((i+j)%(640)<320){
 ctx.fillStyle = "rgb("+(184+((i+j)%320)*0.19)+","+(134+((i+j)%320)*0.33)+","+(11+((i+j)%320)*0.57)+")";
      ctx.fillRect(i,j,1,1);}
if((i+j)%(640)>=320){
 ctx.fillStyle = "rgb("+(245-((i+j)%320)*0.19)+","+(241-((i+j)%320)*0.33)+","+(195-((i+j)%320)*0.57)+")";
      ctx.fillRect(i,j,1,1);}

}
else if((i-950)*(i-950)+(j-250)*(j-250)<=40000){
ctx.fillStyle = "rgb(0,0,0)";
      ctx.fillRect(i,j,1,1);}
else if((i-950)*(i-950)+(j-250)*(j-250)<=48400){
if((i+j)%(640)<320){
 ctx.fillStyle = "rgb("+(184+((i+j)%320)*0.19)+","+(134+((i+j)%320)*0.33)+","+(11+((i+j)%320)*0.57)+")";
      ctx.fillRect(i,j,1,1);}
if((i+j)%(640)>=320){
 ctx.fillStyle = "rgb("+(245-((i+j)%320)*0.19)+","+(241-((i+j)%320)*0.33)+","+(195-((i+j)%320)*0.57)+")";
      ctx.fillRect(i,j,1,1);}

}
else if((((i-950)*(i-950))/(250*250)+((j-860)*(j-860))/(50*50))<=1){
ctx.fillStyle = "rgb(0,100,255)";
      ctx.fillRect(i,j,1,1);}

else if((((i-955)*(i-955))/(250*250)+((j-865)*(j-865))/(50*50))<=1){
ctx.fillStyle = "rgb(255,255,255)";
      ctx.fillRect(i,j,1,1);

}
else{


      ctx.fillStyle = "rgb("+(i+j)%320+",0,0)";
      ctx.fillRect(i,j,1,1);}}}
        
        var Links = new Array(); // Links information
        var hoverLink = ""; // Href of the link which cursor points at
        ctx.fillStyle = "rgb(0,255,0)"; // Default blue link color
        ctx.font = "15px Courier New"; // Monospace font for links
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

        // Ready for use ! You are welcome !
drawLink(700,850,"http://localhost/2ndpage.php","                                                        ");
drawLink(705,865,"http://localhost/2ndpage.php","                                                       ");
drawLink(710,835,"http://localhost/2ndpage.php","                                                     ");
drawLink(750,820,"http://localhost/2ndpage.php","                                            ");
drawLink(735,880,"http://localhost/2ndpage.php","                                                ");
drawLink(800,895,"http://localhost/2ndpage.php","                                ");
drawLink(830,805,"http://localhost/2ndpage.php","                          ");

        



ctx.fillStyle = 'rgb(255,255,255)'; 
ctx.font = 'bold 50px _sans';
ctx.fillText ("GET STARTED", 780, 840);






ctx.fillStyle = 'rgb(255,255,0)'; 
ctx.font = 'bold 300px _sans';
ctx.fillText ("E-CONNECT", 65, 505);

ctx.fillStyle = 'rgb(255,255,0)'; 
ctx.font = 'bold 300px _sans';
ctx.fillText ("E-CONNECT", 65, 495);

ctx.fillStyle = 'rgb(255,255,0)'; 
ctx.font = 'bold 300px _sans';
ctx.fillText ("E-CONNECT", 55, 505);

ctx.fillStyle = 'rgb(255,255,0)'; 
ctx.font = 'bold 300px _sans';
ctx.fillText ("E-CONNECT", 55, 495);

ctx.fillStyle = 'rgb(255,255,0)'; 
ctx.font = 'bold 300px _sans';
ctx.fillText ("E-CONNECT", 60, 505);

ctx.fillStyle = 'rgb(255,255,0)'; 
ctx.font = 'bold 300px _sans';
ctx.fillText ("E-CONNECT", 60, 495);

ctx.fillStyle = 'rgb(255,255,0)'; 
ctx.font = 'bold 300px _sans';
ctx.fillText ("E-CONNECT", 55, 500);

ctx.fillStyle = 'rgb(255,255,0)'; 
ctx.font = 'bold 300px _sans';
ctx.fillText ("E-CONNECT", 65, 500);




ctx.fillStyle = 'rgb(250,128,114)'; 
ctx.font = 'bold 300px _sams';
ctx.fillText ("E-CONNECT", 60, 500);







    </script>


  </body>
</html>