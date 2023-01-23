<?php

class SelectionSort
{
    private function findSmallest(array $arr): int
    {
        $smallest = $arr[0];
        $smallest_index = 0;

        foreach ($arr as $key => $value) {
            if ($value < $smallest) {
                $smallest = $value;
                $smallest_index = $key;
            }
        }
        return $smallest_index;
    }

    private function sort(array $arr): array
    {
        $smallest = [];

        foreach ($arr as $item) {
            $smallest_index = $this->findSmallest($arr);
            $smallest[] = $arr[$smallest_index];
            unset($arr[$smallest_index]);
            $arr = array_values($arr);
        }

        return $smallest;
    }

    public function main(): void
    {
        $arr = [5, 3, 6, 2, 10];
        print_r($this->sort($arr));
    }
}

$sortBySelection = new SelectionSort();
$sortBySelection->main();