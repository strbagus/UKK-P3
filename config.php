<?php
    $conn = new mysqli("localhost", "bagusw", "1sampai8", "db_restoukk");
    if (!$conn) {
        echo "Connection Error : ".$conn->connect_error();
    }
?>