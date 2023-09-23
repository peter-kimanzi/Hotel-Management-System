<?php 
    include './db.php';
    $sql = "SELECT * FROM booking JOIN room ON booking.room_id=room.room_id WHERE room.status=1";
    $query = $connection->query($sql);

    echo "$query->num_rows";

?>