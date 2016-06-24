<?php
class Person{

    var $fistName;
    var $lastName;
    var $email;
    function __construct($fname, $lname, $email){
           $this->fistName = $fname;
           $this->lastName = $lname;
           $this->email = $email;
    }
    public function __destruct()
    {
        echo "i have been destroyed";
    }
}
?>