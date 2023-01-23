<?php

class TwoSumSorted
{

    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    private function twoSum(array $numbers, int $target): array
    {
        $left = 0;
        $right = count($numbers) - 1;

        // for example lets consider example [2,7,11,15]
        // notice that array already sorted in non decreasing order

        while ($left < $right) {
            if ($numbers[$left] + $numbers[$right] === $target) {
                return [$left + 1, $right + 1];
            }

            if ($numbers[$left] + $numbers[$right] < $target) {
                $left++;
                // if value on left and right indexes would be worse than target
                // we need increase left edge of array

            } else {
                $right--;
                // if value on left and right indexes would be better than target
                // we need decrease right edge of array
            }
        }
    }

    public function main(): void
    {
        $numbers = [2, 7, 11, 15];
        $target = 9;
        $result = $this->twoSum($numbers, $target);
        print_r($result);
    }
}

$twoSumSorted = new TwoSumSorted();
$twoSumSorted->main();