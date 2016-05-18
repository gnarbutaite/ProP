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

    </script>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a.scroll").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 800, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
});
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
    
    
    <div class="contacts">
        <h2>Contacts</h2><br><br>
       
        <div class="email">
             <h3 class="email"><b>E-mail</b></h3>
            <p class="emial">
                <b>Main Organizator:</b><br/>
                e.thaqi@fontys.nl<br/><br>
                <b>Festival Information:</b><br>
                Platonics@info.nl           
            </p></div>
        <div class="Phone">
            <h3 class="phone"><b>Phone</b></h3>
        <p class="phone"><b>Tel:</b><br> 00-830-363-546<br><br>
            <b>Information:</b><br>
            00-316-436-131</p>
        </div>
        <div class="Office">
            <h3 class="office"><b>Office</b></h3>
        <p class="office"><b>Fontys University of Applied Sciences</b><br>
            Address:<br>
            Rachelsmolen 1,<br> 
            Eindhoven,5612HC,<br>
            The Netherlands</p>
        </div>
    </div>
    
    <div class="about">
    <h2 class="about">About the festival</h2><br><br><br>
        <img src="mob.jpg" class="mob" align="left">
        <p class="mob">The festival is going to take place in "Park KuierPad" in the northern part of The Netherlands. This year, in the event we are going to have a special guests such as Inna, Gareth Emery, Paul van Dyk, Armin van Buuren and many others. The festival is organized for three days, but each of the participants can choose how much time they are willing to spend on this amazing event.<br>
        Depending on their choice, the price difference is going to occur. Parking places and campin spots are going to be provided for additional price, too.<br>
        Furthermore, this year the main arganizors arranged 10 000 tickets to participate in "Platonics". During the event, there will be food and drink places where people will be able to buy whatever they want. Moreover, in this great fesival participants will have thr possibility to rent digital devices such as cameras, laptops,etc.<br>
        Organizers are putting a lot of their time and efford to make this event rememberable for each person for a very long time. We hope to see you there!
        </p>
    </div>
    <div class="map">
        <h2><b>Map of the event</b></h2><br><br>
        <img src="park.png" class="map">
    </div>
   
    
    <div class="rules">
    <h2 class="rules">Rules</h2> <br><br>
        <p class="rules">Everyone is subject to search at the gate.<br>
                         Wristband is void if tampered with or damage.<br>
                         NO wristband sharing.<br>
                         Lineup and schedule are subject to change.<br> 
                         You must have paid for camp at "Platonics".<br>
                         One pass is valid for the entire weekend.<br>
                         All vehicles are subject to search.<br>
                         There is no re-entry in the campground with your vehicle.<br>
        </p>
        
    </div>

    

    <div class="sponsors">
    <img src="Heineken.png" class="sponsors">
        <img src="nl-ah.png" class="sponsors">
    <img src="philips-logo.png" class="sponsors">
        <img src="jumbo.png" class="sponsors">
    <img src="eind.png" class="sponsors">
        <img src="mediamarkt.png" class="sponsors">
        <img src="bavaria.png" class="sponsors">
        <img src="logo-fontys.png" class="sponsors">
    </div>
        
    <div class="footer">
    
         <a href="tickets.html"><img id="ticketsl" src="TicketButton.png"></a>            
    </div>
     <div class="arrow"><a href="#top" class="scroll"><img class="arrow" src="arrow.png"></a></div>
    
        </body>
</html>