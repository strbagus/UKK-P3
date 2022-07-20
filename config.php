<?php
    $conn = new mysqli("localhost", "root", "", "restoukk");
    if (!$conn) {
        echo "Connection Error : ".$conn->connect_error();
    }
?>
