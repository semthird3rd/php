<html>
    <body>
<?php
if(isset($_POST['submit']))
{
    $id=$_POST['n1'];
    echo "<a href = u2.php?idd=$id>details</a>";

}

?>
<form name="f1" method="post" action="u1.php">
    enter name<input type="text" name="n1">
    <input type="submit" name="submit" value="submit">
</form>
    </body>
</html>