<?php
session_start();


?>
<html>
    <body>
    <?php
    session_destroy();
    echo "session destroy";
?>
    </body>
</html>