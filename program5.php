<?php
    printf("Input usage unit: ");
    fscanf(STDIN, "%d",$unit);
    if ($unit<1) printf("price of electricity bill = 0");
    else if (1<=$unit && $unit<=5) printf("price of electricity bill = 10");
    else if ($unit<=10) {$price1=($unit-5)*3+10;
                            printf("price of electricity bill = %d", $price1);}
    else if ($unit <=15) {$price2=($unit-10)*5+10+15;
                             printf("price of electricity bill = %d", $price2);}
    else {$price3=($unit-15)*10+10+15+25;
                         printf("price of electricity bill = %d", $price3);
                        }
