<?php
session_start();

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['user']) ? true : false;

// Prevent caching so the user cannot use the back button to access the page
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[CPS*5745*02] Project 1</title>
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script defer src="scripts.js"></script>
</head>

<body>

    <?php include 'header.php'; ?>

    <div class="container">
        <!-- Data selection section -->
        <div class="data-selection">
            <h2>Data Selection</h2>
            <form id="dataForm">
                <!-- New Radio Buttons for Open Price and Growth Rate -->
                <input type="radio" id="openPrice" name="dataOption" value="openPrice" style="display: none;">
                <label for="openPrice" style="display: none;" id="openPriceLabel">Open Price<br></label>

                <input type="radio" id="growthRate" name="dataOption" value="growthRate" style="display: none;">
                <label for="growthRate" style="display: none;" id="growthRateLabel">Growth Rate</label>

                <label for="symbolChoice" id="symbolLabel" style="display: none;">Choose Stock Symbol:</label>
                <select id="symbolChoice" name="symbolChoice" style="display: none;" onchange="loadAvailableMonths()">
                    <!-- Dynamically populate available stock symbols here -->
                </select>
                <br>

                <label for="monthChoice" id="monthLabel" style="display: none;">Choose Month/Year:</label>
                <select id="monthChoice" name="monthChoice" style="display: none;" onchange="showGenerateGraphButton()">
                    <!-- Dynamically populate available months/years here based on symbol -->
                </select>
                <br>

                <!-- Add Generate Graph button -->
                <button type="button" id="generateGraphButton" style="display: none;" onclick="generateGraph()">Generate Line Graph</button>
                <!-- Add new dropdowns for selecting 2 stock symbols for the Area Chart -->
                <label for="stockSymbol1" id="stockSymbol1Label" style="display: none;">Select First Stock:</label>
                <select id="stockSymbol1" name="stockSymbol1" style="display: none;">
                    <!-- Options will be populated dynamically -->
                </select>
                <br>

                <label for="stockSymbol2" id="stockSymbol2Label" style="display: none;">Select Second Stock:</label>
                <select id="stockSymbol2" name="stockSymbol2" style="display: none;">
                    <!-- Options will be populated dynamically -->
                </select>
                <br>

                <!-- Add Generate Area Chart button -->
                <button type="button" id="generateAreaChartButton" style="display: none;" onclick="generateAreaChart()">Generate Area Chart</button>
            </form>
        </div>

        <div class="message-area">
            <h2>Message Area</h2>
            <div id="message"></div>
            <!-- Dynamically populate with messages based on user actions -->
        </div>

        <div class="graph-area">
            <h2>Graph Area</h2>
            <div id="stockChart"></div>
        </div>

        <!-- Graph and form areas here -->
        <div class="table-area">
            <h2>Stock Prices</h2>
            <div id="stockPricesTable"></div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    
</body>

</html>