<?php

    $conecction = mysqli_connect(
        'localhost',
        'root',
        '',
        'tasks_app'
    );

    if($conecction) {
        echo 'Database is conected';
    }

?>