<?php

class LongestSubstringSlidingWindow
{
    /**
     * @param String $s
     * @return Integer
     */
    private function lengthOfLongestSubstring(string $s): int
    {
        $length = strlen($s);
        $max = 0;
        $start = 0;
        $end = 0;
        $map = [];

        while ($end < $length) { // Проходимся по массиву
            $char = $s[$end]; // Берем текущий символ
            if (isset($map[$char])) {
                // Если в массиве есть индекс с нашим символом
                // то, нам нужно передвинуть поинтер старта вперед
                // выясняем что больше итерация старта или сам старт, и передвигаем поинтер на большее
                $start = max($map[$char] + 1, $start);
            }
            $map[$char] = $end; // в массиве создаем индекс с нашим символом, и даем ему значение поинтера
            $max = max($max, $end - $start + 1); // задаем максимальную длину подстроки
            $end++;
        }

        return $max;
    }

    public function main(): void
    {
        $s = 'abcabcbb';
        print_r($this->lengthOfLongestSubstring($s));
    }
}

$substr = new LongestSubstringSlidingWindow();
$substr->main();