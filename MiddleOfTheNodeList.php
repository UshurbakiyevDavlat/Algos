<?php

require_once __DIR__ . '\ListNode.php';

class MiddleOfTheNodeList
{

    /**
     * @param ListNode $head
     * @return ListNode
     */
    private function middleNode(ListNode $head): ListNode
    {
        $slow = $head;
        $fast = $head;

        // Two pointers concept
        // while slow goes one step
        // fast goes two steps
        // and when fast will end node list
        // slow will be in the middle
        // and even if list elements is not even
        // slow will be on the second middle node

        while ($fast && $fast->next) {
            $slow = $slow->next;
            $fast = $fast->next->next;
        }
        return $slow;
    }

    public function main(): void
    {
        $head = [1, 2, 3, 4, 5];
        $head = new ListNode($head[0], new ListNode($head[1], new ListNode($head[2], new ListNode($head[3], new ListNode($head[4])))));

        print_r($this->middleNode($head));
    }
}

$midNode = new MiddleOfTheNodeList();
$midNode->main();