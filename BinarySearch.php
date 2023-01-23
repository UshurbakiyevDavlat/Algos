<?php

class BinarySearch
{
    public function search($array, $target): float|int
    {
        // array should be sorted for this to work
        sort($array);

        $left = 0;
        $right = count($array) - 1;

        while ($left <= $right) {
            $mid = floor(($left + $right) / 2); // find average index in dataset

            if ($array[$mid] === $target) { // if target is found then return index
                return $mid;
            }

            if ($array[$mid] > $target) { // if target is less than mid then search left
                $right = $mid - 1;
            } else { // if target is greater than mid then search right
                $left = $mid + 1;
            }
        }

        return -1; // if target is not found then return -1
    }

    public function main(): void
    {
        $array = [7, 2, 5, 1, 9, 3, 6, 4, 8];
        $target = 5;
        $result = $this->search($array, $target);
        echo $result;
    }
}

$binarySearch = new BinarySearch();
$binarySearch->main();