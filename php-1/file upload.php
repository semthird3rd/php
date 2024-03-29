<?php
if(isset($_POST["submit"]))
{
    $ta="uploads/";
    $t =$ta.basename($_FILES['up']['name']);

    if(move_uploaded_file($_FILES['up']['tmp_name'],$t))
    {
        echo "file uploaded successfully";
    }
    else
    {
        echo "sorry,file not uploaded, please try again";
    }
}

?>
<html>
    <body>
        <form action="upload.php" method="post" enctype="multipart/form-data">
select file:
        <input type="file" name="up"/>
        <input type="submit" value="upload"name="submit"/>

        </form>
    </body>
</html>

