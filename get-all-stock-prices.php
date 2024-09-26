<?php
include 'dbconfig.php';

$query = "SELECT * FROM Stock_prices ORDER BY date DESC LIMIT 1000";
$result = $conn->query($query);

$stockPrices = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $stockPrices[] = array(
            'id' => (int)$row['id'],
            'symbol' => $row['symbol'],
            'date' => $row['date'],
            'open' => (float)$row['open'],
            'high' => (float)$row['high'],
            'low' => (float)$row['low'],
            'close' => (float)$row['close'],
            'volume' => (int)$row['volumne'],
            'adj_close' => (float)$row['adj_close']
        );
    }
}
echo json_encode($stockPrices);

$conn->close();
