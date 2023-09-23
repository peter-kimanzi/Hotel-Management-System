<?php 
    include './db.php';
    $sql = "SELECT * FROM room WHERE check_in_status = '1'";
    $query = $connection->query($sql);

    echo "$query->num_rows";

?>