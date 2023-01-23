<?php

/*
 Given a sorted array of distinct integers and a target value, return the index if the target is found.
 If not, return the index where it would be if it were inserted in order.
 */

class SearchInsertPosition
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    public function searchInsert(array $nums, int $target): int
    {
        $left = 0;
        $right = count($nums) - 1;

        $in = in_array($target, $nums, true);
        if (!$in) {
            $nums[] = $target;
            sort($nums);
            $right++;
        }

        while ($left <= $right) {
            $mid = (int)floor(($left + $right) / 2);
            if ($nums[$mid] === $target) {
                return $mid;
            }

            if ($nums[$mid] > $target) {
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        }
        return -1;
    }

    public function main(): void
    {
        $nums = [1, 3, 5, 6];
        $target = 5;

        print_r($this->searchInsert($nums, $target));
    }
}

$searchInsertPosition = new SearchInsertPosition();
$searchInsertPosition->main();