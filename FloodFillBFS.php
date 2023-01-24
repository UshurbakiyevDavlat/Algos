<?php

class FloodFillBFS
{

    /**
     * @param Integer[][] $image
     * @param Integer $sr
     * @param Integer $sc
     * @param Integer $color
     * @return Integer[][]
     */
    private function floodFill(array $image, int $sr, int $sc, int $color): array
    {
        $originalColor = $image[$sr][$sc];
        $visited = array_fill(0, count($image), array_fill(0, count($image[0]), false));
        $queue = [[$sr, $sc]];
        while (!empty($queue)) {
            list($r, $c) = array_shift($queue);
            if ($r < 0 || $r >= count($image) || $c < 0 || $c >= count($image[0]) || $image[$r][$c] != $originalColor || $visited[$r][$c]) {
                continue;
            }
            $image[$r][$c] = $color;
            $visited[$r][$c] = true;
            $queue[] = [$r - 1, $c];
            $queue[] = [$r + 1, $c];
            $queue[] = [$r, $c - 1];
            $queue[] = [$r, $c + 1];
        }
        return $image;
    }

    public function main(): void
    {
        $arr = [[1, 1, 1], [1, 1, 0], [1, 0, 1]];
        print_r($this->floodFill($arr, 1, 1, 2));
    }
}

$bfs = new FloodFillBFS();
$bfs->main();