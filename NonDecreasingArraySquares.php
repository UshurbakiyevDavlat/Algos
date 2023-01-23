<?php

/*
 * Given an integer array nums sorted in non-decreasing order,
 * return an array of the squares of each number sorted in non-decreasing order.
 *
*/

class NonDecreasingArraySquares
{

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    public function sortedSquares(array $nums): array
    {
        // first of all we need mapped through array
        // and while mapping we need absolute squared value of each item inside
        $squared = array_map(static function ($n) {
            return abs($n ** 2);
        }, $nums);

        sort($squared); //then we sort it in ascending order
        return $squared;
    }

    public function main(): void
    {
        $nums = [-4, -1, 0, 3, 10];
        $result = $this->sortedSquares($nums);
        print_r($result);
    }
}

$nonDecreasingArraySquares = new NonDecreasingArraySquares();
$nonDecreasingArraySquares->main();