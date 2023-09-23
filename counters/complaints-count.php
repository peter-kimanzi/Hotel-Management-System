<?php 
    include './db.php';
    $sql = "SELECT * FROM complaint";
    $query = $connection->query($sql);

    echo "$query->num_rows";

?>