<?php

$item1 = 100;
$item2 = 200;
$item3 = 300;


echo getTotalInventory(10, 1);
echo "\n";
echo getTotalInventory(10, 1);
echo "\n";
echo getTotalInventory(10, 1);



function getTotalInventory($qty, $item){
  
  
  if ($item == 1)
  {
    global $item1;
    $TotalStocks = $item1 - $qty;
    //return "Stocks: \nItem 1 $item1 stocks \nGet Item 1 ($qty) qty | Remaining Stocks = $TotalStocks \n";
    return "Get Item 1 ($qty) qty | Remaining Stocks = $TotalStocks \n";
  }
  
  if ($item == 2)
  {
    global $item2;
    $TotalStocks = $item2 - $qty;
    //return "Stocks: \nItem 1 $item1 stocks \nGet Item 1 ($qty) qty | Remaining Stocks = $TotalStocks \n";
    return "Get Item 2 ($qty) qty | Remaining Stocks = $TotalStocks \n";
  }
  
  if ($item == 3)
  {
    global $item3;
    $TotalStocks = $item2 - $qty;
    //return "Stocks: \nItem 1 $item1 stocks \nGet Item 1 ($qty) qty | Remaining Stocks = $TotalStocks \n";
    return "Get Item 3 ($qty) qty | Remaining Stocks = $TotalStocks \n";
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