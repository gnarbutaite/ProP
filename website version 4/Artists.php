<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet"; type="text/css"; href="Styling.css">
    
    <script>
       <!--Platonics Button-->
    var website;
    
        function HomeButton() { 
    
    
    setTimeout(image1, 0);
    setTimeout(image2, 750);
    setTimeout(Change, 1000);}

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

<body>
           <div id="top">
            
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
    
     <div class="artist">
                        <div class="artistheader">
                            <h1>AVICII</h1>
                        </div>
                
                        <div class="artistcontent">
                            <img src="avicii.jpg" width="100%" height="30%">
                           He released his debut studio album, True, in 2013. It received generally positive reviews from music critics, peaked within the top ten in more..
                        </div>
                
                     
            </div>
         <div class="artist">
                        <div class="artistheader">
                            <h1>Armin van Buuren</h1>
                        </div>
                
                        <div class="artistcontent">
                            <img src="Armin.png" width="100%">
                            In 1995, van Buuren had
                            his first major succes with
                            a track called "Blue Fear",
                            wich was released under
                            the Cyber Records label. He..
                        </div>
                
                 
            </div>
         <div class="artist">
                        <div class="artistheader">
                            <h1>Gareth Emery</h1>
                        </div>
                
                        <div class="artistcontent">
                            <img src="gareth.jpg" width="100%">
                           Emery's debut vinyl release was a white label remix of The Shrink's classic "Nervous Breakdown" which was released in early 2002..
                        </div>
                
    </div>
         <div class="artist">
                        <div class="artistheader">
                            <h1>Paul van Dyk</h1>
                        </div>
                
                        <div class="artistcontent">
                            <img src="paul.jpg" width="100%">
                            Matthias Paul, better known by his stage name Paul van Dyk is a German Grammy-winning electronic music DJ, musician and record producer. 
                        </div>
                
                   
    
            </div>
    
              <div class="newsm">
                  <a href="http://www.avicii.com" target= "_blank"> <button class="newsm"><b>Read more</b></button></a>
                  <a href="http://www.arminvanbuuren.com/" target="_blank"> <button class="newsm"><b>Read more</b></button></a>
                  <a href="http://100reasonstolive.garethemery.com/" target="_blank"> <button class="newsm"><b>Read more</b></button></a>
                  <a href="http://www.paulvandyk.com/" target="_blank"><button class="newsm"><b>Read more</b></button></a>
                            
                        </div>
    
    
         <a href="register.php"><img id="tickets" src="TicketButton.png"></a>            
</body>
</html>