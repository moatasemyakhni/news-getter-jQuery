<?php

    include('connection.php');

    $query = $mysqli->prepare("SELECT * FROM news");
    if(!$query->execute()) {
        die("ERROR in SQL statement");
    }

    $results = $query->get_result();
    while($result = $results->fetch_assoc()) {
        echo '
        <div class="d-flex flex-column shadow mb-5">
            <div class="d-flex flex-column p-2 bg-dark align-items-center text-white">
                <h2 class="font-monospace border-bottom border-3 mb-1 rounded">'. $result['title'] .'</h2>
                <p class="mb-3 text-white-50 align-self-start px-3">'. $result['published'] .'</p>
                <p class="px-3 align-self-start">
                '. $result['content'] .'
                </p>
            </div>
        </div>
        ';
    }