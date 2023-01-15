<?php
include_once "Facade.php";

$email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  $email = $_POST["email"];
  $password = $_POST["password"];
}
$data= new login();
$data->isValid($email,$password);



//login class
class login {
  
  private $userName;
  private $password;

  function __construct() {
 
    $this->userName = "";
  	$this->password = "";
  }
  function getuserName(){
    return $this->userName;
  }

  function getassword(){
    return $this->password;
  }


  function isValid($u,$p)
  {
    $db = new Facade();
    $db->checkValid($u,$p);
  }  
}

?>