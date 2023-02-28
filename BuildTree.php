<?php

class BuildTree
{
    function build($flatArray, $parentId = null): array
    {
        $result = [];

        foreach($flatArray as $item) {
            if($item['parent_id'] === $parentId) { // до тех пор пока, пока не будет false
                $item['childs'] = $this->build($flatArray, $item['id']); // будет вызываться рекурсивно
                $result[] = $item;
            }
        }

        return $result;
    }

    public function main(): void
    {
        $arr = [
            ['id' => 1, 'parent_id' => null],
            ['id' => 2, 'parent_id' => 1],
            ['id' => 3, 'parent_id' => 1],
            ['id' => 4, 'parent_id' => 2],
            ['id' => 5, 'parent_id' => 2],
            ['id' => 6, 'parent_id' => 4]
        ];

        print_r($this->build($arr));
    }
}

$build = new BuildTree();
$build->main();
