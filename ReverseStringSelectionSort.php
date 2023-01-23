<?php
 // This is not good decision do it this way, sorting by selection sort because time complexity here is O(n^2)
    // But this is just for fun, to show how to use selection sort in PHP
class ReverseStringSelectionSort
{
    private function findMaxIndex(&$s): int
    {
        $maxIndex = count($s) - 1;

        foreach ($s as $key => $value) {
            if ($maxIndex < $key) {
                $maxIndex = $key;
            }
        }
        return $maxIndex;
    }

    private function selectionSort(&$s): array
    {
        $result = [];

        foreach ($s as $item) {
            $maxIndex = $this->findMaxIndex($s);
            $result[] = $s[$maxIndex];
            unset($s[$maxIndex]);
        }

        return $result;
    }

    /**
     * @param String[] $s
     * @return NULL
     */
    private function reverseString(array &$s): void
    {
        print_r($s = $this->selectionSort($s));
    }

    public function main(): void
    {
        $str = ['h', 'e', 'l', 'l', 'o'];
        $this->reverseString($str);
    }
}

$reverse = new ReverseStringSelectionSort();
$reverse->main();