<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
        <?php
            $_SESSION["favcolor"] = "green";
            $_SESSION["favanimal"] = "cat";
            echo "Session variables are set.";
        ?>
    </body>
</html>