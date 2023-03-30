<?php

class Profit
{
    public function getProfit(array $data): array
    {
        if (count($data) < 2) {
            return [];
        }

        $buyInd = 0;
        $sellInd = 0;

        $maxProfit = 0;
        $minPrice = $data[0];

        for ($i = 1, $iMax = count($data); $i < $iMax; $i++) {
            if ($data[$i] < $minPrice) {
                $minPrice = $data[$i];
                $buyInd = $i;
            } else {
                $profit = $data[$i] - $minPrice;
                if ($profit > $maxProfit) {
                    $maxProfit = $profit;
                    $sellInd = $i;
                }
            }
        }

        if ($maxProfit === 0) {
            return [];
        }

        return ['Покупка' => $buyInd, 'Продажа' => $sellInd];
    }
}

$data = [13, 6, 3, 4, 10, 2, 3];

$profit = new Profit();
print_r($profit->getProfit($data));
