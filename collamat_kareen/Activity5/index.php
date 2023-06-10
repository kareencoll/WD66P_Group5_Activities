<?php
echo getTotalInventory("item1", 100, 3);
echo "\n";
echo getTotalInventory("item1", 97, 5);
echo "\n";
echo getTotalInventory("item2", 200, 5);
echo "\n";
echo getTotalInventory("item1", 92, 50);
echo "\n";
echo getTotalInventory("item3", 300, 5);

function getTotalInventory($item, $qty, $buy){
  $totalInventory = $qty - $buy;
  return "$item - ($buy) qty | Remaining Stocks = $totalInventory";
}

?>