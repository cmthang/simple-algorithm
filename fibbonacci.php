<?php

    $fib = [1,1,2];
    $i = 2;
    $n = 47;
    $check = 15;

    for ($i ; $i < $n; $i++)
    {
        $fib[$i+1] = $fib[$i] + $fib[$i-1];        
    }

    print_r (array_values($fib));
    echo ("Index: ".$check."  Value: ".$fib[$check]."  ");
?>