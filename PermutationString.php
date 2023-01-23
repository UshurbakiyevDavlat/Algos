<?php

class PermutationString
{

    /**
     * @param String $s1
     * @param String $s2
     * @return Boolean
     */
    private function checkInclusion(string $s1, string $s2): bool
    {
        // Create a frequency map of characters in s1
        $char_count = array_fill_keys(str_split($s1), 0); // заполняем индексы символами
        foreach (str_split($s1) as $char) {
            $char_count[$char]++; // заполняем частоту индексов
        }

        // Initialize variables to keep track of the number of matching characters
        $left = 0;
        $right = 0;
        $match_count = 0;

        // Iterate through s2 and update the frequency map and match count
        while ($right < strlen($s2)) {
            if (array_key_exists($s2[$right], $char_count)) { // если во 2 строке есть такой символы
                $char_count[$s2[$right]]--; // снижаем частоту этого символа
                if ($char_count[$s2[$right]] >= 0) { // если частота больше или равно 0
                    $match_count++; // то увеличиваем полное совпадение
                }
            }

            // If the window size is equal to the length of s1, check if all characters match
            if ($right - $left + 1 == strlen($s1)) { // если размер окна равен размеру первой строки
                // если полное совпадение равно длине 1 строки
                if ($match_count == strlen($s1)) {
                    return true; // то возвращаем тру
                }

                // Move the left pointer and update the frequency map and match count
                if (array_key_exists($s2[$left], $char_count)) { // если символ второй строки есть в мапе частоты
                    $char_count[$s2[$left]]++; // увеличиваем частотность
                    if ($char_count[$s2[$left]] > 0) { // если частотность больше 0
                        $match_count--; // уменьшаем полное совпадение
                    }
                }
                //двигаем поинтер
                $left++;
            }
            //двигаем поинтер
            $right++;
        }
        return false;
    }

    public function main(): void
    {
        $s1 = 'prosperity';
        $s2 = 'properties';

        echo (int)($this->checkInclusion($s1, $s2));
    }
}

$str = new PermutationString();
$str->main();