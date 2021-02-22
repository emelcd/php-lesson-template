<?php

    function createConnection($host="localhost",$user="root",$password="foofoo", $myDB = "sakila") {
        $conn = new mysqli($host,$user,$password,$myDB);


        return $conn;
    }

    $conn = createConnection();

    $result = $conn->query("SHOW TABLES");

    






?>