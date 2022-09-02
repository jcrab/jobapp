<?php
// Process incoming form data here.
// make sure that first and last name were typed into the form, otherwise
// send them back to index.php using the header function.
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "Skills for " . $first . " " . $last;
        ?>
    </body>
</html>
