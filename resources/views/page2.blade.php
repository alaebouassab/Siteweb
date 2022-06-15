<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <h1 class="h1"> NFT'S NEWS</h1>
    </div>
    <div class="topnav">
        <a href="./welcome">Home</a>
        <a class="active" href="./page2">Ranck a project</a>
        <a href="#contact">Contact us</a>

    </div>

    <div class="vol23"> 
        <!--volet2-->
         <div class="methode">
            <div class="vertical-menu">
              <h3 style="text-align: center;">Filter par:</h3>
              <button class="accordion">background</button>
              <div class="panel">
                <a href="#">blue</a>
                <a href="#">black</a>
                <a href="#">white</a>
                <a href="#">green</a>
                <a href="#">yellow</a>
              </div>

            
              <button class="accordion">hair</button>
              <div class="panel">
                <a href="#">long</a>
                <a href="#">short</a>
                <a href="#">white</a> 
              </div>

              <button class="accordion">head</button>
              <div class="panel">
                <a href="#">11</a>
                <a href="#">22</a>
                <a href="#">33</a> 
              </div>


                
              </div>
        </div>

        <div class="projets">
            
            <br><br><br><br><br><br><br>

            <div class="vole2">
                <div class="a-1" bordr="1" > 
                    <div class="a-2">
                        <div class="a-4"><a href="./page3"><button class="botona" type="button" >Show more</div> </a>
                    </div>
                    <div class="a-2">
                        <div class="a-4"></a><button  class="botona" type="button">Show more</div>
                    </div>
                    <div class="a-2">
                        <div class="a-4"><button class="botona" type="button">Show more</div>
                    </div>
                    <div class="a-2">
                        <div class="a-4"><button class="botona" type="button">Show more</div>
                    </div>
                    <div class="a-2">
                        <div class="a-4"><button class="botona" type="button">Show more</div>
                    </div>
                    <div class="a-2">
                        <div class="a-4"><button class="botona" type="button">Show more</div>
                    </div>
                    <div class="a-2">
                        <div class="a-4"><button class="botona" type="button">Show more</div>
                    </div>
                    <div class="a-2">
                        <div class="a-4"><button class="botona" type="button">Show more</div>
                    </div>
                    <div class="a-2">
                        <div class="a-4"><button class="botona" type="button">Show more</div>
                    </div>
                    <div class="a-2">
                        <div class="a-4"><button class="botona" type="button">Show more</div>
                    </div>
                    <div class="a-2">
                        <div class="a-4"><button class="botona" type="button">Show more</div>
                    </div>
                    
                    
                    
                
                
                </div>
            </div>
              
            
        </div>
        </div>

        
        <div class="footer" style="text-align: center;">
            <a href="https://upcomingnft.art/" class="links" title="go to another website">upcomingnft</a>
            <a href="https://upcomingnft.art/" class="links" title="go to another website">upcomingnft</a>
            <a href="https://upcomingnft.art/" class="links" title="go to another website">upcomingnft</a>
      
            <h6 id="contact" style="color: white;">TELE:0622235308</h6></a>
              <br><br>
            <a href="https://www.facebook.com/Emirates/" title="go to page facebook"><img src="facebook.png" class="rounded-circle" 
              style="width:20px;height:20px; margin-right: 2px;float: left;"></a>
              <a href="mailto:arzamyasmine@gmail.com" target="_blank" class="links" ><img src="gmail.png" class="rounded-circle"
                title="go to our e-mail"
                style="width:20px;height:20px; margin-right: 2px;float: left;">
              </a>
          </div> 

    
        </div>

        <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        
        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");
        
            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
              panel.style.display = "none";
            } else {
              panel.style.display = "block";
            }
          });
        }
    </script>

    
</body>
</html>
