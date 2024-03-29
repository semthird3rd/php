<?php
interface demo
{
    public function display();
}
class demo1
{
    public $a;
    function read($x)
    {
        $this ->a=$x;
    }
}

    class demo2 extends demo1 implements demo
    {
        public function display()
        {
            echo $this ->a;
        }
    }

    
$a=new demo2();
$a->read(25);
$a->display();
?>