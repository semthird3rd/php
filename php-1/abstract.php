<?php
abstract class demo
{
    abstract function test();
    function test1()
    {
        echo "test1 function is called";
    }
}
class xyz extends demo
{
    function test()
    {
        echo "test function is called";
    }
}

$a=new xyz();
$a->test();
$a->test1();
?>