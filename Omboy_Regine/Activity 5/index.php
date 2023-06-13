<?php
$Bean1 = 100;
$Bean2 = 200;
$Bean3 = 300;

$Bean1 = computeForTotalStocks($Bean1, "$Bean1", 10);
$Bean2 = computeForTotalStocks($Bean2, "$Bean2",100);
$Bean1 = computeForTotalStocks($Bean1, "$Bean1",50);
$Bean1 = computeForTotalStocks($Bean1, "$Bean1",40);
$Bean3 = computeForTotalStocks($Bean3, "$Bean3",200);

function computeForTotalStocks($Bean, $Beanname, $qty){
    $remaining =$Bean - $qty;

    echo "$Beanname - ($qty)qty | Remaining stocks = $remaining \n";
    return $remaining;
}
?>