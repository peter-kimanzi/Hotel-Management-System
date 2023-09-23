<?php 
    include './db.php';
    $sql = "SELECT * FROM booking WHERE payment_status = '0'";
    $query = $connection->query($sql);

    echo "$query->num_rows";

?>