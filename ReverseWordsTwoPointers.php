<?php

class ReverseWordsTwoPointers
{
    private function swap(&$a, &$b): void
    {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }

    /**
     * @param String $s
     * @return String
     */
    private function reverseWords(string $s): string
    {
        $s = explode(' ', $s); // explode string into slices by separator

        foreach ($s as &$item) {
            $item = str_split($item); // split string to array

            // twoPointer reversing logic
            $left = 0;
            $right = count($item) - 1;

            while ($left < $right) {
                $this->swap($item[$left], $item[$right]); //swap left and right pointers value
                $left++;
                $right--;
            }

            // $item now is array of string
            $item = implode('', $item); // get string from array, by separator
        }

        // $s now is array of strings

        return implode(' ', $s);  // get string from array of strings, by separator
    }

    public function main(): void
    {
        $str = "Let's take LeetCode contest";
        print_r($this->reverseWords($str));
    }
}

$reverseWord = new ReverseWordsTwoPointers();
$reverseWord->main();