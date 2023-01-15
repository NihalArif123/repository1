<?php    


include_once "schclass.php";
$busno=$route=$date=$time="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $busno=$_POST["busno"];
    $route=$_POST["route"];
    $date=$_POST["date"];
    $time=$_POST["time"];
}
$data= new schedule();
$data->insert($busno,$date,$route,$time);



?>
