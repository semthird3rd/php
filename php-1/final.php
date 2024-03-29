<?php
final class demo
{
    public $a;
    function read()
    {
        $this->a=45;

    }
}

    class demo1 extends demo
    {
        function show()
        {
            echo $this->a;
        }
    }


$a=new demo1();
$a->read();
$a->show();




?>