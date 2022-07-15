<?php function linkedListMultiplierCheck( $arr, $init ) {
    $head = new Node($arr[0],
        new Node($arr[1],
            new Node($arr[2],
                new Node($arr[3], NULL))));
    return linkedListMultiplier($head, $init);
}

class Node {
    public $data, $next;
    public function __construct($data, $next = NULL) {
        list($this->data, $this->next) = [$data, $next];
    }
}
// DO NOT MODIFY THE CODE ABOVE

function linkedListMultiplier($head, $init)
{
    $values = [];
    $total = null;
    if(is_null($total))
        $total = $init;


    $total = $head->data * $init;

    $values[] = $total;

    $total = $head->next->data * $total;
    $values[] = $total;


    $total = $head->next->next->data * $total;
    $values[] = $total;

    $total = $head->next->next->next->data * $total;
    $values[] = $total;


    return $values;


}

print_r(linkedListMultiplierCheck([1,2,3,4], 1));

?>


