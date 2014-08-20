<h1>Current Stock Information for AAPL</h1>
<?php
require_once('class.stockMarketAPI.php');
$StockMarketAPI = new StockMarketAPI;
$StockMarketAPI->symbol = 'AAPL';
$StockMarketAPI->stat = 'all';
print_r($StockMarketAPI->getData());
?>
<hr>
<?
$start = '2013-1-1';
$end = '2013-12-31';
?>
<h1>Historical Stock Information for AAPL (<?php echo $start ?> - <?php echo $end ?>)</h1>
<?php
$StockMarketAPI = new StockMarketAPI;
$StockMarketAPI->symbol = 'AAPL';
$StockMarketAPI->history = array(
  'start' => $start,
  'end' => $end,
  'interval' => 'd' // Daily
);
print_r($StockMarketAPI->getData());
?>
