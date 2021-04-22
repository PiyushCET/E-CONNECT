
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-image: url("fronta.jpg");
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
      const width = canvas.width = 1800;
      const height = canvas.height = 950;
     const ctx = canvas.getContext('2d');

for(i=0;i<width;i++){
for(j=0;j<height;j++){
if((((i-950)*(i-950))/(250*250)+((j-860)*(j-860))/(50*50))<=1){
ctx.fillStyle = "rgb(0,100,255)";
      ctx.fillRect(i,j,1,1);}
}
}

        
        var Links = new Array(); // Links information
        var hoverLink = ""; // Href of the link which cursor points at
        ctx.fillStyle = "rgb(2,255,0)"; // Default blue link color
        ctx.font = "40px Courier New"; // Monospace font for links
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

drawLink(700,850,"http://localhost/SELECTSTATE.php","                                                        ");
drawLink(705,865,"http://localhost/SELECTSTATE.php","                                                       ");
drawLink(710,835,"http://localhost/SELECTSTATE.php","                                                     ");
drawLink(750,820,"http://localhost/SELECTSTATE.php","                                            ");
drawLink(735,880,"http://localhost/SELECTSTATE.php","                                                ");
drawLink(800,895,"http://localhost/SELECTSTATE.php","                                ");
drawLink(830,805,"http://localhost/SELECTSTATE.php","                          ");

        



ctx.fillStyle = 'rgb(255,255,255)'; 
ctx.font = 'bold 50px _sans';
ctx.fillText ("GET STARTED", 780, 840);
        











    </script>






    










</body>
</html>