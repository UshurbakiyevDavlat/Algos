<?php
/*
 * Given an integer array nums, rotate the array to the right by k steps, where k is non-negative.
*/
class RotateArray
{

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    public function rotate(array &$nums, int $k): void
    {
        $k %= count($nums); //to handle case when k > length of $nums
        print($k);
        //If offset is negative, the sequence will start that far from the end of the array.
        print_r(array_slice($nums, -$k)); // slice array with -k offset

        //If length is given and is negative then the sequence will stop that many elements from the end of the array.
        print_r(array_slice($nums, 1, -$k)); // slice $k elements end of array

        $nums = array_merge(array_slice($nums, -$k), array_slice($nums, 0, -$k)); // result into nums via link
    }

    public function main(): void
    {
        $nums = [1, 2, 3, 4, 5, 6, 7];
        $k = 3;
        $this->rotate($nums, $k);
        print_r($nums);
    }
}

$rotateArray = new RotateArray();

$rotateArray->main();