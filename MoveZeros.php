<?php

class MoveZeros
{
    /**
     * @param Integer[] $nums
     * @return void
     */
    private function getResult(array &$nums): void
    {
        foreach ($nums as $key => $value) {
            if ($value === 0) {
                unset($nums[$key]); // removed 0
                $nums[] = 0; // added zero to the end
            }
        }
        print_r($nums);
    }

    public function main (): void
    {
        $arr = [1,0,0,3,4,6,9,2];
        $this->getResult($arr);
    }
}

$moveZeros = new MoveZeros();
$moveZeros->main();