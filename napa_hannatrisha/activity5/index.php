<?php

$item1 = 100;
$item2 = 200;
$item3 = 300;

echo "Stocks: \nItem 1 = $item1 stocks \nItem 2 = $item2 stocks \nItem 3 = $item3 stocks \n";
echo "\n";
echo "\n";

echo getTotalInventory(1, 3);
echo "\n";
echo getTotalInventory(1, 5);
echo "\n";
echo getTotalInventory(2, 5);
echo "\n";
echo getTotalInventory(1, 50);
echo "\n";
echo getTotalInventory(3, 5);

function getTotalInventory($item, $qty)
{
  global $item1;
  global $item2;
  global $item3;
  
  if ($item == 1)
  {
    $item1 = $item1 - $qty;
    echo "Item 1 $item1 stocks \nGet Item 1 ($qty) qty | Remaining Stocks = $item1 \n";
  }
  
  else if ($item == 2)
  {
    $item2 = $item2 - $qty;
    echo "Item 2 $item2 stocks \nGet Item 2 ($qty) qty | Remaining Stocks = $item2 \n";
  }
  
  else if ($item == 3)
  {
    $item3 = $item3 - $qty;
    echo "Item 3 $item3 stocks \nGet Item 3 ($qty) qty | Remaining Stocks = $item3 \n";
  }
  
  else{
    echo "Invalid item.";
  }
   
}
 
?>

























