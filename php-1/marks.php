<html>
    <body>

   
<?php
if(isset($_POST['submit']))
{
    $a=$_POST['n1'];

    if ($a >= 70 && $a<=100)
    {
        echo "Distinction";
    } 
    elseif ($a >= 60 && $a < 69) 
    {
        echo "First Class";
    } 
    elseif ($a >= 40 && $a < 59)
     {
        echo "Pass";
    } 
    else 
    {
        echo "Fail";
    }
}

?>
<form name="f1" method="post" action="marks.php">

enter marks<input type="text" name="n1">
<input type="submit" name="submit" value="submit">
</form>
 </body>
</html>
