<?php 
    include './db.php';
    $sql = "SELECT * FROM staff";
    $query = $connection->query($sql);

    echo "$query->num_rows";

?>