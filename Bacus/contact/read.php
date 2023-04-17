<?php
    include "connect.php";

    $query = "SELECT * FROM `new_table` ORDER BY id";
    $query_run = mysqli_query($connection, $query); 