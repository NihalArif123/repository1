<?php
$con = new mysqli("localhost", "root", "", "bus managment system",3306);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
}

?>