<?php 

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $port = 8889;

    $db_name = "RabbitCabs";
    
    $connection = mysqli_connect($servername, $username, $password, $db_name, $port);

    if (!$connection) {
        echo "Connection failed";

    }


?>