
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-image: url("india.jpg");
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
      const height = canvas.height = 3000;
     const ctx = canvas.getContext('2d');



        
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
//j&k,ladakh
drawLink(990,1870,"http://localhost/SELECTOPTION.php","    ");
drawLink(1140,1870,"http://localhost/SELECTOPTION.php","  ");
drawLink(980,1890,"http://localhost/SELECTOPTION.php","          ");
drawLink(970,1910,"http://localhost/SELECTOPTION.php","          ");
drawLink(965,1930,"http://localhost/SELECTOPTION.php","          ");
drawLink(925,1950,"http://localhost/SELECTOPTION.php","            ");
drawLink(905,1970,"http://localhost/SELECTOPTION.php","            ");
drawLink(905,1990,"http://localhost/SELECTOPTION.php","            ");
drawLink(907,2010,"http://localhost/SELECTOPTION.php","           ");
drawLink(920,2030,"http://localhost/SELECTOPTION.php","         ");
drawLink(896,2050,"http://localhost/SELECTOPTION.php","        ");
drawLink(900,2070,"http://localhost/SELECTOPTION.php","       ");
drawLink(900,2090,"http://localhost/SELECTOPTION.php","   ");
drawLink(1000,2090,"http://localhost/SELECTOPTION.php","  ");
drawLink(892,2110,"http://localhost/SELECTOPTION.php","   ");
drawLink(872,2130,"http://localhost/SELECTOPTION.php","   ");
drawLink(852,2150,"http://localhost/SELECTOPTION.php","  ");
ctx.fillStyle = 'rgb(253,79,164)'; 
ctx.font = '150px Monotype Corsiva';
ctx.fillText ("CLICK ON THE MIDDLE OF ", 35, 395);
ctx.fillStyle = 'rgb(253,79,164)'; 
ctx.font = '150px Monotype Corsiva';
ctx.fillText ("YOUR  STATE", 475, 530);


        











    </script>






    










</body>
</html>