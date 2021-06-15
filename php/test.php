<?php

require_once 'db_connection.php';

$select = $conn->query("SELECT * FROM interesses");


foreach($select as $item){
    $response = file_get_contents('https://api.hgbrasil.com/finance/stock_price?key=0631bf81&symbol='.$item['symbol']);

    $response = json_decode($response);

    echo($response->results->$item['symbol']->company_name).'<br>';
    echo($response->results->$item['symbol']->price).'<br>';
    echo($response->results->$item['symbol']->change_percent).'<br>';
    echo($response->results->$item['symbol']->updated_at).'<br>';
    echo '<br><br><br>';
}


