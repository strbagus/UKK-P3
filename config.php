<?php
    $conn = new mysqli("localhost", "bagus", "1sampai8", "db_restoukk");
    if (!$conn) {
        echo "Connection Error : ".$conn->connect_error();
    }
?>