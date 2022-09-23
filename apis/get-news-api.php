<?php

    include('connection.php');

    $query = $mysqli->prepare("SELECT * FROM news");
    if(!$query->execute()) {
        die("ERROR in SQL statement");
    }

    $results = $query->get_result();
    while($result = $results->fetch_assoc()) {
        echo '<pre>';
        print_r($result);
    }