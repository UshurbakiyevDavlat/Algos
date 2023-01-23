<?php

class ReverseStringTwoPointers
{
    private function swap(&$a, &$b): void
    {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }

    /**
     * @param String[] $s
     * @return void
     */
    private function reverseString(array &$s): void
    {
        $left = 0;
        $right = count($s) - 1;

        // So, we need to swap elements by two pointers one from start and another from end
        while ($left < $right) {
            $this->swap($s[$left], $s[$right]);
            $left++;
            $right--;
        }
    }

    public function main(): void
    {
        $str = ['h', 'e', 'l', 'l', 'o'];
        $this->reverseString($str);
        print_r($str);
    }
}

$reverse = new ReverseStringTwoPointers();
$reverse->main();