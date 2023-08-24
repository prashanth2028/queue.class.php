<?php

class Queue{
    public $queue=[];
    public $size = 15;
    public $index = 0;

    public function enqueue($data){
        if($this->index >=$this->size){
            echo 'overflow in queue';
        }
        
             $this->queue[$this->index]= $data;
           return $this->index++;
        
    }
    public function dequeue(){
        if(empty($this->queue)){
            echo 'dequeue is empty';
        }
        
            array_shift($this->queue);
        
    }
}



$obj = new Queue;

 $obj->enqueue(3);
 $obj->enqueue(5);
 $obj->enqueue(8);
 $obj->enqueue(10);
 $obj->enqueue(15);
 $obj->enqueue(20);

print_r($obj->queue) ;

$obj->dequeue();

print_r($obj->queue);


?>