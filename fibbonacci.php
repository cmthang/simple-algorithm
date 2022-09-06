<?php

    // fibonacci algorithm: 
        // Input an index (number) that gives the value of that index in the fibonacci sequence.

    $fib = [0,1,1];
    $n = 47;
    $i = 2;

    $check1 = 15;
    $check2 = 15;

    // Array of fibonacci and use for loop when change $n = $check1
    for ($i ; $i < $n; $i++)
    {
        $fib[$i+1] = $fib[$i] + $fib[$i-1];   //Since the calculation transitions from the next element ($fib[$i+1]) , the parameter i is currently standing     
    }


    print_r ($fib);
    echo('Test 1: ');
    echo ("Index 1: ".$check1."  Value 1: ".$fib[$check1]."  ");


    // Use While Loop
    function fibonacci_whileloop($check2){
        $a = 1; $b = 0; $temp = 0;

        while ($check2 > 0){
            $temp = $a;
            $a = $a + $b;
            $b = $temp;
            $check2--;
        }
        return $b;
    }

    echo ('Test 2: ');
    echo ("Index 2:  ".$check2." Value 2: ".fibonacci_whileloop($check2)." ");

    // Recursive Algorithm
    // function fibonacci_recursive(num, memory) 
    // {
    //     return 0;
    // };


?>


