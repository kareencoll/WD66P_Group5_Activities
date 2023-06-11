<?php

$item1 = 100;
$item2 = 200;
$item3 = 300;
$remainingstocks1;
$remainingstocks2;
$remainingstocks3;


echo getTotalInventory(2, 10);
echo "\n";
echo getTotalInventory(1, 10);
echo "\n";
echo getTotalInventory(3, 10);

function getTotalInventory($item, $qty)
{
  global $item1;
  global $item2;
  global $item3;
  global $remainingstocks1;
  global $remainingstocks2;
  global $remainingstocks3;
  
  if ($item == 1)
  {
    //if ($remainingstocks1 == $item1)
      $remainingstocks1 = $item1 - $qty;
      echo "Stocks: \nItem 1 $item1 stocks \nGet Item 1 ($qty) qty | Remaining Stocks = $remainingstocks1 \n";
  }
  
  
  else if ($item == 2)
  {
    
    $remainingstocks2 = $item2 - $qty;
    echo "Stocks: \nItem 2 $item2 stocks \nGet Item 2 ($qty) qty | Remaining Stocks = $remainingstocks2 \n";
  }
  
  else if ($item == 3)
  {
    
    $remainingstocks3 = $item3 - $qty;
    echo "Stocks: \nItem 3 $item3 stocks \nGet Item 3 ($qty) qty | Remaining Stocks = $remainingstocks3 \n";
  }
  
  else{
    echo "Invalid stocks item";
  }
   
}
  
?>

































  //while($allInTotal == ""){
  //$allInTotal += $totalPrice;
  //return "$allInTotal";
  
  
//$i = 1;
//$number = 6;
//while ($i <= $number) {
    // generate array with values from 1 to $i
    //$array = range(1, $i);
    // if there're more than 1 element in array - output sum
    //if (count($array) > 1) {
             // 1+2+... part                // sum of elements of array
        //echo implode('+', $array) . ' = ' . array_sum($array) . "\n";
    //}
    //$i++;
//}