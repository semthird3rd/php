<?php
if((isset($_POST['submit']))&& ($_POST['submit']=="login"))
{
    $uname=$_POST['$uname'];
    $cpass=$_POST['cpass'];
    if($uname=="rcp"&& $cpass=="imrd")
    {
        SESSION_START();
        $_SESSION['cname']=$uname;
        header("location:p.php");
    }
    else
    {
        echo "invalid username password";
    }
}

?>

<html>
<body>
    <h2>Login</h2>
   
    <form name="login" method="post" action="se.php">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="uname" id="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="cpass" id="password" required>
        </div>
        <div>
            <input type="submit" value="Login">
        </div>
        <div>
            <input type="reset" name="re" value="clear">
        </div>
    </form>
</body>
</html>