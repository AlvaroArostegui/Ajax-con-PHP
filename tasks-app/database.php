<?php

    $conecction = mysqli_connect(
        'localhost',
        'root',
        '',
        'tasks-app'
    );

    if($conecction) {
        echo 'Database is conected';
    }

?>