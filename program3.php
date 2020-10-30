<?php
    printf("1. calculate price\n2. compare 2-numbers\n3. exit\n\n");
    printf("Input menu number : ");
    fscanf(STDIN, "%d", $menuNo);
    if($menuNo==1) {printf("Input Number (price %%discount) : ");
                  fscanf(STDIN, "%d %f ", $price, $discount);
                  $netprice = $price*(1-$discount/100);
                  printf("price %d, discount %.2f and netprice %.2f", $price ,$discount,$netprice);
                  }
    else if ($menuNo==2) {printf("Input Number (a b ) : ");
        fscanf(STDIN, "%d %d", $a, $b);
        if($a > $b) $comparison="greater than";
        else if($a < $b) $comparison="less than";
        else $comparison="equal to";
        printf("%d %s %d", $a,$comparison,$b);
                        }
    else if ($menuNo==3) exit;
    else printf("Please enter right number!");
