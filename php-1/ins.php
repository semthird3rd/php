<?php
if(isset($_POST['submit']))
{
    $sname=$_POST['sname'];
    $sadd=$_POST['sadd'];
    $smob=$_POST['smob'];
    $con= mysql_connect("localhost","root","");
    $db=mysql_selectdb("school");
    $a=mysql_query("insert into student values($sname,$sadd,$smob)");
    
    if($a)
{
    echo "data stored successfull";

}
else{
    echo "data not stored";
}

}

if(isset($_POST["update"]))
{
    $sname=$_POST['sname'];
    $sadd=$_POST['sadd'];
    $smob=$_POST['smob'];
    $con= mysql_connect("localhost","root","");
    $db=mysql_selectdb("school");
    $a=mysql_query("update student set smob=$smob where sname=$sname");

    if($a)
    {
        echo "data update successfull";
    
    }
    else
    {
        echo "data not update";
    }
    
}

if(isset($_POST["delete"]))
{
    $sname=$_POST['sname'];
    $sadd=$_POST['sadd'];
    $smob=$_POST['smob'];
    $con= mysql_connect("localhost","root","");
    $db=mysql_selectdb("school");
    $a=mysql_query("delete from student where sname="$sname"");

    if($a)
    {
        echo "data delete successfull";
    
    }
    else
    {
        echo "data not deleted";
    }
    
}
?>

<html>
    <body>

<form name="f1" method="post" action="ins.php">
    enter name<input type="text" name="sname">
    enter add<input type="text" name="sadd">
    enter no<input type="text" name="smob">
    <input type="submit" name="submit" value="submit">
    <input type="submit" name="update" value="update">
    <input type="submit" name="delete" value="delete">

</form>
    </body>
</html>