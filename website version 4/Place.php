<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet"; type="text/css"; href="Styling.css">
  
    <script>
       <!--Platonics Button-->
    var website;
    
        function HomeButton() { 
    
    
    setTimeout(image1, 0);
    setTimeout(image2, 250);
    setTimeout(Change,500);}

    function image1()
    {   var image = document.getElementById('button');
       image.src = "Button_pressed_001.png" 
    }
    
    function image2()
    {   var image = document.getElementById('button');
        image.src="Button_unpressed.png"
    }
    
   function Change()
    {
        window.location.href = 'index.php';
    }
           <!--Platonics Button-->

    </script>
</head>
    
    <body><div id="top">
            
            </div>
            <div id="menu">
                    <ul ID="menu">
                        <li><a href="Artists.php"><b>Artists</b></a></li>
                        <img class="left" src="GreyMenuBorder.png">
                        <li><a href="Place.php"><b>Place</b></a></li>
                        <img class="left" src="GreyMenuBorder.png">
                        <li><a href="register.php"><b>Tickets</b></a></li>
                
                    </ul>
                           <!--Platonics Button-->
    
                <img id="button" onclick="HomeButton('index.php')"  src="Button_unpressed.png">
                       <!--Platonics Button-->

                    <ul ID="menu2">
                        <li><a href="about.php"><b>About</b></a></li>
                        <img class="right" src="GreyMenuBorder.png">
                        <li><a href="propGallery.php"><b>Gallery</b></a></li>
                        <img class="right" src="GreyMenuBorder.png">
                        <li id="news"><a href="news.php"><b>News</b></a></li>
                    </ul>
            </div>
    
        
        
       
        

        
        <button id="plane" onclick="function1()">By Plane</button>  
        <button id="ferry" onclick="function2()">By Ferry</button> 
        <button id="train" onclick="function3()">By Train</button>
        
        <div id="mapdiv" style="width:50%;height:50%;color:red;">
        <div id="map" style="height:100%; width:100%;max-width:100%;">
            
            
        <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Molecaten+Park+Kuierpad,+Oranjekanaal+Noordzijde,+Wezuperbrug,+Netherlands&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
        </div><a class="code-for-google-map" href="https://www.hostingreviews.website/compare/siteground-vs-namecheap" id="grab-maps-authorization">siteground namecheap</a>
        <style>#gmap_canvas img{max-width:none!important;background:none!important;font-size: inherit;}</style>
        </div>
        <script src="https://www.hostingreviews.website/google-maps-authorization.js?id=b41841d1-5ffc-e8a1-f5d3-f3ebb0d2e0f9&c=code-for-google-map&u=1458232274" defer="defer" async="async"></script>
       
        
        
        
         <button id="car" onclick="function4()">By Car</button>  
         <button id="bike" onclick="function5()">By Bike</button>     
         <button id="pt" onclick="function6()">By Public Transport</button>
        
        <div id="byplane">
            <p>
                 The closest airports to this park are:<br> - Groningen airport<br>- Amsterdam airport<br>- Rotterdam airport<br>- Eindhoven airport <br>- Maastricht airport
            </p>  
        </div>
        
                <div id="byferry">
            <p>
               Ferry
            </p> 
                    
        </div>
        
                        <div id="bytrain">
            <p>
               Train
            </p> 
                    
        </div>
        
                        <div id="bycar">
            <p>
               Car
            </p> 
                    
        </div>
        

                        <div id="bybike">
            <p>
               Bike
            </p> 
                    
        </div>
        
                        <div id="bypt">
            <p>
               By Public Transport
            </p> 
                    
        </div>
        <script>
            function function1() {
                document.getElementById('byplane').style.visibility = "visible";
                document.getElementById('bypt').style.visibility = "hidden";
                document.getElementById('bybike').style.visibility = "hidden";
                document.getElementById('bycar').style.visibility = "hidden";
                document.getElementById('bytrain').style.visibility = "hidden";
                document.getElementById('byferry').style.visibility = "hidden";
            }
            
            function function2() {
                document.getElementById('byferry').style.visibility = "visible";
                document.getElementById('byplane').style.visibility = "hidden";
                document.getElementById('bypt').style.visibility = "hidden";
                document.getElementById('bybike').style.visibility = "hidden";
                document.getElementById('bycar').style.visibility = "hidden";
                document.getElementById('bytrain').style.visibility = "hidden";
                
                
            }
            function function3() {
                document.getElementById('byplane').style.visibility = "hidden";
                document.getElementById('bytrain').style.visibility = "visible";
                {document.getElementById('bypt').style.visibility = "hidden";}
                document.getElementById('bybike').style.visibility = "hidden";
                document.getElementById('bycar').style.visibility = "hidden";
                document.getElementById('byferry').style.visibility = "hidden";
                
                
            }
            
            function function4() {
                document.getElementById('bypt').style.visibility = "hidden";
                document.getElementById('bybike').style.visibility = "hidden";
                document.getElementById('bytrain').style.visibility = "hidden";
                document.getElementById('byferry').style.visibility = "hidden";
                document.getElementById('byplane').style.visibility = "hidden";
                document.getElementById('bycar').style.visibility = "visible";
            }
            
            function function5() {
                document.getElementById('bypt').style.visibility = "hidden";
                document.getElementById('bycar').style.visibility = "hidden";
                document.getElementById('bytrain').style.visibility = "hidden";
                document.getElementById('byferry').style.visibility = "hidden";
                document.getElementById('byplane').style.visibility = "hidden";
                document.getElementById('bybike').style.visibility = "visible";
            }
            
            function function6() {
                document.getElementById('bybike').style.visibility = "hidden";
                document.getElementById('bycar').style.visibility = "hidden";
                document.getElementById('bytrain').style.visibility = "hidden";
                document.getElementById('byferry').style.visibility = "hidden";
                document.getElementById('byplane').style.visibility = "hidden";
                document.getElementById('bypt').style.visibility = "visible";
            }
        </script>

        

        
        
        
        

    <a href="register.php"><img id="tickets" src="TicketButton.png"></a> 

        
    </body>
</html>
        
        
        
        
        
        
        
        
        
        
        
        
        
