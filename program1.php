<?php
    printf("Input Number (price %%discount) : ");
    fscanf(STDIN, "%d %f ", $price, $discount);
    $netprice = $price*(1-$discount/100);
    printf("price %d, discount %.2f and netprice %.2f", $price ,$discount,$netprice);