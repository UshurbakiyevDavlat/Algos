<?php

class RecursionFactorial
{
    private function findFact($num): float|int
    {
        // explanation
        // 5! = 5 * 4 * 3 * 2 * 1
        // in stack of calls we will have function calls that will be executed in reverse order

        if ($num === 1) {  // base case
            return 1;
        }

        /*
         * so in 1 function call we have 5 * recursion  of 4
         * in 2 function call we have 4 * (recursion of 3)
         * in 3 function call we have 3 * (recursion of 2)
         * in 4 function call we have 3 * (recursion of 1)
         * in 5 function call in condition we will return 1
         *
         * so in 4 function call we will have 3 * 1 = 3
         * in 3 function call we will have 2 * 3 = 6
         * in 2 function call we will have 4 * 6 = 24
         * in 1 function call we will have 5 * 24 = 120
         */

        return $num * $this->findFact($num - 1); // recursion case
    }

    public function main(): void
    {
        $num = 5;
        $result = $this->findFact($num);
        print_r($result);
    }
}

$factorial = new RecursionFactorial();
$factorial->main();