<?php

    $db = [
        'success' => true,
        'response' => [
            [
                'poster' => 'https://images-na.ssl-images-amazon.com/images/I/91Smva2Q6cL._AC_SL1425_.jpg',
                'author' => 'Skrillex',
                'title' => 'Bangrang',
                'year' => '2011',
                'genre' => 'Dubstep',
            ],
            [
                'poster' => 'https://www.lacasadelrap.com/wp-content/uploads/2020/01/future-drake-life-is-good-e1578685429841.jpg',
                'author' => 'Drake',
                'title' => 'Life is good',
                'year' => '2020',
                'genre' => 'Hip Hop',
            ],
            [
                'poster' => 'https://www.nuovecanzoni.com/wp-content/uploads/2020/01/anna-bando-cover.jpg',
                'author' => 'ANNA',
                'title' => 'Bando',
                'year' => '2020',
                'genre' => 'Pop Rap',
            ]
        ]
    ];
    
    echo json_encode($db);

    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");


?>