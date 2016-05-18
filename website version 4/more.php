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
        window.location.href = 'index.html';
    }
           <!--Platonics Button-->

    </script>
    
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
    
        <div class="NewThisYear"> 
        <h1 class="NewThisYear"><a name="NewThisYear"></a>   WHAT IS NEW THIS YEAR?   </h1>
            <br>
       <img src="Shambala-2012-Main-Stage-Crowd.jpg" class="DifferentThisY" >
            
            <p class="NewThisYear">
            
             This year "Platonics" are going to be different - more stages, famous DJ's, better environment.
            Expect world-renowned house and techno DJs alongside epic stage production as Platonics into Molecaten Park Kuierpad  for its fourth edition this year.

Merging magical wonderment with electronic beats, revellers can combine beach relaxation with hardcore raving, escaping the hustle and bustle of city life in this hidden pocket of the Netherlands. 
Bringing together a collection of creatives to transform its setting into an enchanted land, Molecaten Park Kuierpad is all about the complete experience, from its 50+ DJs right down to its unique stage design, everything is done to perfection.
<br>
            <p class="editions">
EDITIONS: 2013 2014 2015 2016
            </p>
            
        
        <br><br>
            <hr>
            <br>
        
        <div class="MorePPL">
            <h1 class="NewThisYear"><a name="people"></a>MORE PEOPLE</h1>
        <img src="f10.jpg" class="MorePPL">
        <p class="MorePPL">
            Last year this event had 5 000 participants, this year it is planned to make it twice bigger. Organizers think that
        Platonics is more than just a music festival, it is a cultural event that draws celebrities, floods social media feeds and sparks trends in fashion.

The multi-day concert, held during the Summer in the Netherlads' nicest park, kicks off a bevy of outdoor music festivals across Netherlands every year. But how does Platonics compare to events like Bonnaroo and Lollapalooza ?

            We compared Platonics to its peers using data from vertical search engine Graphiq, figures reported by Billboard and information provided by festival representatives. Here is how Platonics stacks up by the numbers, as told in four infographics:</p>
            <img src="coacella.png" class="MorePPL">
        <br><br> <hr><br>
            
        </div>
        <div class="attractions">
            <h1 class="NewThisYear"><a name="attractions"></a>MORE ATTRACTIONS</h1>
            <img src="f1.jpg" class="MorePPL">
            <br>
            <p class="attractions">Event "Platonics" is ordering attractions for participants on the event in 2016 for adults who are..
            </p>
            At this ever-growing festival, creature comforts can range from the simple (shade tents) to the practical water stations and phone-recharging centers.


A short walk away, there's more familiar forms of relaxation under way in The Brewery, a cavernous tent with a mulch-padded floor, three bars and streaming music videos. Sawhorse-style tables give thirsty fans a place to elbow up to a pint of special-edition Dogfish Head beer, Firefly Ale.
<br>
Platonics Music Festival 'The music is great. The people are great. The Dogfish beer is amazing', enthused festival goer Denise McIsaac, 27, of Boston.
<br>

And certainly don't forget the food, which is present at Firefly in startling depth, with a surprisingly international flair. Yes, there are the standards - the hamburgers and hot dogs, the fries and wraps. But the truly tempting items tend toward the offbeat - the Korean BBQ tacos, the chipotle chili, the kale and quinoa salad.
<br>
'I was surprised at the food options', said 24-year-old Sophia Alleman of Rochester, N.Y.  'There are some real amazing options for vegans and vegetarians.'
<br>
Wash it down with a beverage from the festival bars offering cocktails and icy margaritas as well as beer, pausing perhaps between sips to offer a toast to what could very well be the official Firefly motto: 'When the music stops, the fun doesn't have to end!'
            
            </div>
            
            
            
            
        </div>
        
        
        
        
        
        
        
        
        
     <div class="arrow"><a href="#top" class="scroll"><img class="arrow" src="arrow.png"></a></div>
    
    
    </body>
</html>