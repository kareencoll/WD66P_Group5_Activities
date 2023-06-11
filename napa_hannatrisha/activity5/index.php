<?php

$item1 = 100;
$item2 = 200;
$item3 = 300;
$remainingstocks1 = 0;
$remainingstocks2 = 0;
$remainingstocks3 = 0;


echo getTotalInventory(1, 10);
echo "\n";
echo getTotalInventory(2, 10);
echo "\n";
echo getTotalInventory(1, 10);
echo "\n";
echo getTotalInventory(2, 10);




function getTotalInventory($item, $qty)
{
  
  if ($item == 1)
  {
    global $item1;
    global $remainingstocks1;
    $totalstocks1 = $item1 - $qty;
    $remainingstocks1 -= $totalstocks1;
    echo "Stocks: \nItem 1 $item1 stocks \nGet Item 1 ($qty) qty | Remaining Stocks = $remainingstocks1 \n";
  }
  
  else if ($item == 2)
  {
    global $item2;
    global $remainingstocks2;
    $totalstocks2 = $item2 - $qty;
    $remainingstocks2 -= $totalstocks2;
    echo "Stocks: \nItem 2 $item2 stocks \nGet Item 2 ($qty) qty | Remaining Stocks = $remainingstocks2 \n";
  }
  
  else if ($item == 2)
  {
    global $item2;
    global $remainingstocks2;
    $totalstocks2 = $item2 - $qty;
    $remainingstocks2 -= $totalstocks2;
    echo "Stocks: \nItem 2 $item2 stocks \nGet Item 2 ($qty) qty | Remaining Stocks = $remainingstocks2 \n";
  }
  
  else{
    echo "Invalid stocks item";
  }
   
}
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
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









?>