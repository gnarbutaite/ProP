<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<script src="jquery.min.js"></script>
    </head>
	<body>
<script language="javascript" type="text/javascript">
	
function buyTickets(){
	alert("kur1");
    var firstName = document.getElementsByName("firstName")[0].value;
    var lastName = document.getElementsByName("lastName")[0].value
     var email = document.getElementsByName("email")[0].value
alert(firstName);
	alert(lastName);
	alert(email);
	/*
    var tickets = [];
   
    var with1 = document.getElementsByClassName("with1");
    var without = document.getElementsByClassName("without");
   alert "majka ti";
    var campsiteIncluded = document.getElementsByName("with1")[].checked;
    alert(campsiteIncluded);
    /*
    for (var i = 0; i < numberOfTickets; i++) {
        var singleTicket = [];
        singleTicket[0] = with1[i].checked;
        singleTicket[1] = without[i].checked;
        
        tickets.push(singleTicket);
    }

    alert(tickets);
  */
var datas = {
        'FIRST_NAME' : firstName,
		'LAST_NAME' : lastName,
        'EMAIL' : email
        };
alert("vlizame");

        $.ajax({
           url:"bilet.php",
		   contentType: "application/json; charset=utf-8",
           type:"POST",
           data: datas,
           success: function(response){
	
           },
           error: function (error) {
               alert("pak si eba maikata");
           }

        }); 

 <?php
header("Content-Type: application/json", true);
$username="dbi318554";
$pass="123";
$host="fhictora01.fhict.local";
$database="dbi318554";
$tns = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = ".$host.")(PORT = 1521)))(CONNECT_DATA=(SERVER=DEDICATED)(SERVICE_NAME=fhictora)));User ID=dbi318554;PASSWORD=123;))"; 
$connStr = "oci:dbname=".$tns;      
$conn = new PDO($connStr,$username,$pass); 


$conn->beginTransaction();

echo "here ";
$q ="INSERT INTO CLIENT (EMAIL, FIRST_NAME, LAST_NAME) VALUES (:EMAIL,:FIRST_NAME, :LAST_NAME)";
$stmt = $conn->prepare($q);
$stmt->bindParam(':EMAIL', $_POST['EMAIL'], PDO::PARAM_STR, 200);
$stmt->bindParam(':FIRST_NAME', $_POST['FIRST_NAME'], PDO::PARAM_STR, 200);
$stmt->bindParam(':LAST_NAME', $_POST['LAST_NAME'], PDO::PARAM_STR, 200);

echo "wrqw";
$stmt->execute();
if($stmt->execute()===false)
{  
   echo " it works";
 //   header('Location: index.php');
    
}
    else
    {
        echo "****ERROR****";
    }

if ($conn->commit())
{
 // header('Location: Artists.php');
}
    else
        
    {
        echo "mnogo losho";
    }
    
$conn = null;


?>
}
	</script>
<h2>Tickets</h2> 
                                <form id="ticketform" method="POST"> 
                                    Please select with how many people you are joining our festival:
                                    <select id="ticketselector" onchange="addFields(this.value)" name="nrtickets">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                    <br>
                                    <div class="ticketContainer">
                                        <div class="singleTicket">
                                            <label>Your personal ticket</label>
                                            <input type="checkbox" class="day1" onchange="updateTicketPrice(this)">
                                            <label>Day 1</label>
                                            <input type="checkbox" class="day2" onchange="updateTicketPrice(this)">
                                            <label>Day 2</label>
                                            <input type="checkbox" class="day3" onchange="updateTicketPrice(this)">
                                            <label>Day 3</label>
                                            <div class="priceBox">
                                                <label class="priceLabel">€ 0.00</label>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <p class="textboxtext" id="campsiteTitle">Campsite:</p>
                                    <input type="checkbox" name="campsiteCheckbox" disabled="true" onclick="campsiteForm(this.checked)">
                                    <p id="campsiteComment">(Only selectable with a personal 3-day ticket)</p>
                                    <div id="campsiteOptions" style="display: none;">
                                    <p id="ticketSelectText">Select with how many people you will stay at the camping:</p>
                                    <select id="campticketselector" onchange="updateCampPrice(this.value, false)" name="nrcamptickets">
                                        <option value="1">1</option>	
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                    <p>You will need to fill in your visitors ticket number to give them access to the camping. This can be done after buying tickets when logged in.</p>
                                    <br>
                                    <div class="campTicketContainer"> 
                                    </div>
                                    <p id="reservationFee">Reservation fee:</p>
                                    <p class="price">€ 30.00</p>
                                    <p id="campingFee">Camping fee:</p>
                                    <p id="guestAmount">1x € 20.00</p>
                                    <p id="guestPrice" class="price">€ 20.00</p>
                                    </div>
                                    <hr>
                                    <label class="totalPrice">Total price: € 0.00</label>
                                    <br>
                                    <hr>
                                    <br>
                                    <p class="textboxtext"><b>First Name:</b></p>
                                    <input class="textbox" type="text" name="firstName">
                                    <br>
                                    <p class="textboxtext">Last Name:</p>
                                    <input class="textbox" type="text" name="lastName">
                                    <br>
                                    <p class="textboxtext">Email:</p>
                                    <input class="textbox" type="text" name="email">
                                    <br>
                                    <input id="button" type="button" name="submit" value="Buy tickets" onclick="buyTickets()">
                                </form> 
								</body></html>