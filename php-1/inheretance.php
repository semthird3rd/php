<?php
class demo
{
    public $a;
    function read()
    {
        $this->a=45;

    }
        function show()
        {
            echo $this->a;
        }
    }
$a=new demo();
$a->read();
$a->show();




?>