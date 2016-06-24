/* 
var priceBox = document.createElement('div');
        priceBox.className = "priceBox";

 var totalPriceLabel = document.getElementsByClassName("totalPrice");
    totalPriceLabel.innerHTML = "Total price: \u20AC " + totalPrice.toFixed(2);


var totalPrice = 55;

     function check()
{
if(document.getElementById("icd").checked==true)
        totalPrice+=40;
    }else{
        totalPrice-=40;
    }
   

    var totalPriceLabel = document.getElementsByClassName("totalPrice");
    totalPriceLabel.innerHTML = "Total price: \u20AC " + totalPrice.toFixed(2);

};

*/

<script>
function myFunction() {
    var type = document.forms;
    var txt = "";
    var i;
    for (i = 0; i < type.length; i++) {
        if (type[i].checked) {
            txt = txt + type[i].value + " ";
        }
    }
    document.getElementById("order").value = "You ordered ticket with: " + txt;
}
</script>




//new****************************************
/*


function buyTickets(){
	alert("kur1");
    var firstName = document.getElementsByName("firstname");
    var lastName = document.getElementsByName("lastname");
    var email = document.getElementsByName("email");
	
 
   
    var with1 = document.getElementsByClassName("with1");
   
   alert "majka ti";
    var campsiteIncluded = document.getElementsByName("with1").checked;
    alert(campsiteIncluded);
   
  
alert "bravo";
}
/*
        $.ajax({
           url:"bilet.php",
            contentType: "application/json; charset=utf-8",
           type:"POST",
           data:{
                FIRST_NAME : firstName,
                LAST_NAME : lastName,
                EMAIL : email,
               
                tickets: JSON.stringify(tickets),
                nrtickets: numberOfTickets,
                campsiteIncluded : campsiteIncluded
           },
           success: function(response){
               alert("Success");
           },
           error: function (error) {
               alert("pak si eba maikata");
           }

        }); 

 
}







