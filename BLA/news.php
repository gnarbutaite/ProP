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
    setTimeout(Change, 500);}

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

             
    function ticket(){
        window.location.href = 'register.php'
    }           
    </script>
    
</head>

<body class="majkati">
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
    
    
    
  <div class="news">
                        <div class="newsheader">
                            <h1><b>Different this year</b></h1>
                        </div>
                
                        <div class="newscontent">
                            <img src="Shambala-2012-Main-Stage-Crowd.jpg" width="100%">
                         This year "Platonics" are going to be different - more stages, famous DJ's, nice environment..
                        </div>
    </div>
                      
        
  <div class="news">
                        <div class="newsheader">
                            <h1><b>More people</b></h1>
                        </div>
                
                        <div class="newscontent">
                            <img src="f10.jpg" width="100%">
                       Last year this event had 5 000 participants, this year it is planned to make it twice bigger. Organizers think..  
                        </div>
                
    </div>
                     

    
     <div class="news">
                        <div class="newsheader">
                            <h1><b>More attractions</b></h1>
                        </div>
                
                        <div class="newscontent">
                            <img src="f1.jpg" width="100%">
                            Event "Platonics" is ordering attractions for participants on the event in 2016 for adults who are..
                        </div>  
    </div>
                        <div class="newsmore">
                           
                            <a href="more.php#NewThisYear">  <button class="newsmores"><b>Read more</b></button></a>
                             <a href="more.php#attractions">    <button class="newsmore"> <b>Read more</b></button></a>
                           <a href="more.php#people">  <button class="newsmoreses"><b>Read more</b></button></a>
                            
                        </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

</body>
</html>