<?php
    printf("Input Number (a b ) : ");
    fscanf(STDIN, "%d %d", $a, $b);
    if($a > $b) $comparison="greater than";
    else if($a < $b) $comparison="less than";
    else $comparison="equal to";
    printf("%d %s %d", $a,$comparison,$b);