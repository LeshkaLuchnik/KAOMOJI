<?php

    $route = "127.0.0.1";
    $login = "house";
    $password = "ublhjaj,yjcnm";
    $db_name = "5shouse";


    function connect()
    {
        $conn = mysqli_connect("5.167.16.220", "Leshka", "Leshka_Luchnik", "kaomoji");
        if (!$conn)
        {
            die("Connection failed: ".mysqli_connect_error());
        }

        mysqli_set_charset($conn, "utf8");
        return $conn;
    }

?>