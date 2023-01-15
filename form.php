<?php
require("C:/wamp/www/screens/ReqClass.php");

$des = $busno= $timee = $datee=  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  $des = $_POST['d'];
  $busno = $_POST["b"];
  $timee = $_POST["t"];
  $datee = $_POST["dt"];
}
$data= new requistion_r();
$data->insert_req($des,$busno,$timee,$datee);
?>