<?php
require_once __DIR__ . '\ListNode.php';

class RemoveNthNodeList
{
    /**
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    private function removeNthFromEnd(ListNode $head, int $n): ListNode
    {
        $dummy = new ListNode(); // new ListNode instance
        $dummy->next = $head; // next node of the dummy ListNode is set to the head of the linked list

        $first = $dummy; // first pointer is then set to point to the dummy ListNode.
        $second = $dummy; // second pointer is then set to point to the dummy ListNode.

        for ($i = 1; $i <= $n + 1; $i++) {
            $first = $first->next; // the first pointer is moved n+1 times to reach the node that is n nodes away from the end of the list.
        }

        //first node here, it is node in which we should remove next node

        while ($first) {
            $first = $first->next; // here we need to move first to the end of the list
            $second = $second->next; //second pointer is then used to traverse the list until it reaches the node before the node that the first pointer is pointing to.
        }

        $second->next = $second->next->next; // here we remove the node

        // so second node currently in state without removed node

        //So the dummy ListNode is not modified in any way,
        // only the next node of dummy is modified, and it is pointing to the modified linked list with the nth node removed.

        return $dummy->next;
    }

    public function main(): void
    {
        $head = [1, 2, 3, 4, 5];
        $n = 2;
        $head = new ListNode($head[0], new ListNode($head[1], new ListNode($head[2], new ListNode($head[3], new ListNode($head[4])))));

        print_r($this->removeNthFromEnd($head, $n));
    }
}

$removed = new RemoveNthNodeList();
$removed->main();