<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
        <?php
            session_unset();
            session_destroy();
            echo "All session are now remove, and the session is destroyed.";
        ?>
    </body>
</html>