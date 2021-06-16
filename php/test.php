<?php

    $response = file_get_contents('https://brapi.ga/api/quote/OIBR3');
    $response = json_decode($response);

    $data = $response->results[0]->regularMarketTime;
    echo date('d/m/Y', strtotime($data));

    

