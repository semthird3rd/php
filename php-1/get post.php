<?php
if(isset($_POST["submit"]))
{
    $sn=$_POST["sname"];
    $sr=$_POST["sroll"];
    echo "student name=". $sn ."<br>";
    echo "student roll no=". $sr ."<br>";
    
}


?>

<html>

<body>

<form name="f1" method="post" action="get post.php">
    enter name<input type="text" name="sname"/>
    enter rollno<input type="text" name="sroll"/>
    <input type="submit" name="submit" value="submit"/>
</form>
</body>
</html>