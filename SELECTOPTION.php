
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-image: url("SELECT.jpg");
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
      const height = canvas.height = 2400;
     const ctx = canvas.getContext('2d');



        
        var Links = new Array(); // Links information
        var hoverLink = ""; // Href of the link which cursor points at
        ctx.fillStyle = "rgb(2,255,0)"; // Default blue link color
        ctx.font = "250px Courier New"; // Monospace font for links
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
drawLink(420,541,"http://localhost/PPLANDETAIL.php","  ");
drawLink(695,541,"http://localhost/PPLANDETAIL.php"," ");

drawLink(1045,541,"http://localhost/BPLANDETAIL-.php","  ");
drawLink(1320,541,"http://localhost/BPLANDETAIL-.php"," ");


drawLink(120,1020,"http://localhost/SIM.php","  ");
drawLink(120+275,1020,"http://localhost/SIM.php"," ");
drawLink(740,1020,"http://localhost/BRO.php","  ");
drawLink(740+275,1020,"http://localhost/BRO.php"," ");
drawLink(1360,1020,"http://localhost/BSNLM.php","  ");
drawLink(1360+275,1020,"http://localhost/BSNLM.php"," ");

drawLink(120,1520,"http://localhost/AIRTELM.php","  ");
drawLink(120+275,1520,"http://localhost/AIRTELM.php"," ");
drawLink(740,1520,"http://localhost/VIM.php","  ");
drawLink(740+275,1520,"http://localhost/VIM.php"," ");
drawLink(1360,1520,"http://localhost/JIOM.php","  ");
drawLink(1360+275,1520,"http://localhost/JIOM.php"," ");

drawLink(120,2015,"http://localhost/BSNLB.php","  ");
drawLink(120+275,2015,"http://localhost/BSNLB.php"," ");
drawLink(740,2015,"http://localhost/AIRTELB.php","  ");
drawLink(740+275,2015,"http://localhost/AIRTELB.php"," ");
drawLink(1360,2015,"http://localhost/JIOB.php","  ");
drawLink(1360+275,2015,"http://localhost/JIOB.php"," ");
        // Ready for use ! You are welcome !
		



        











    </script>






    










</body>
</html>