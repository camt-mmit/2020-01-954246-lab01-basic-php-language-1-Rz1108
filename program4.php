<?php
    printf("Input number 1: ");
    fscanf(STDIN, "%f",$number1);
    printf("Input number 2: ");
    fscanf(STDIN, "%f",$number2);
    printf("Input number 3: ");
    fscanf(STDIN, "%f",$number3);
    printf("Input number 4: ");
    fscanf(STDIN, "%f",$number4);
    printf("Input number 5: ");
    fscanf(STDIN, "%f",$number5);
    printf("Input number 6: ");
    fscanf(STDIN, "%f",$number6);
    printf("Input number 7: ");
    fscanf(STDIN, "%f",$number7);
    printf("Input number 8: ");
    fscanf(STDIN, "%f",$number8);
    printf("Input number 9: ");
    fscanf(STDIN, "%f",$number9);
    printf("Input number 10: ");
    fscanf(STDIN, "%f",$number10);
    $a=array($number1, $number2, $number3, $number4, $number5, $number6, $number7, $number8, $number9, $number10);
    $b=max($a);
    printf("The maximum number is %f", $b);
    
