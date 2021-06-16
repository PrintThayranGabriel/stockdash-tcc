<?php

require_once 'db_connection.php';

$select = $conn->query("SELECT * FROM interesses");


foreach($select as $item){
    $response = file_get_contents('https://api.hgbrasil.com/finance/stock_price?key=0631bf81&symbol='.$item['symbol']);

    $response = json_decode($response);

    echo '<div class="card">';

    echo '<h2>';
    echo($response->results->$item['symbol']->company_name).'<br>';
    echo '</h2>';

    echo '<span class="price">';
    echo($response->results->$item['symbol']->price).'<br>';
    echo '</span>';

    echo '<span class="variation">';
    echo($response->results->$item['symbol']->change_percent).'<br>';
    echo '</span>';

    echo '<span class="date">';
    echo($response->results->$item['symbol']->updated_at).'<br>';
    echo '</span>';
}

?>

