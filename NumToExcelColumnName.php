<?php

class NumToExcelColumnName
{

    public function numberToExcelColumn($number): string
    {
        $columnName = '';

        while ($number > 0) {
            $modulo = ($number - 1) % 26; // get the remainder
            $columnName = chr(65 + $modulo) . $columnName; // get the ASCII code for the letter from the remainder
            $number = (int)(($number - $modulo) / 26); // get the next number to process
        }

        return $columnName;
    }

    public function main(): void
    {
        for ($i = 20; $i <= 30; $i++) {
            echo $i . ' => ' . $this->numberToExcelColumn($i) . PHP_EOL;
        }
    }

}

$excel = new NumToExcelColumnName();
$excel->main();