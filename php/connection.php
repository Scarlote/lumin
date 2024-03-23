<?php

    $connection = new mysqli("localhost", "root", "", "liminal_db");

    if ($connection -> connect_errno)
    {
        die("No connection" . $connection -> connect_errno);
    }
    else
    {
        echo "Connected";
    }

?>