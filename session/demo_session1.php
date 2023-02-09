<?php
// Start the session
session_start();

// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    echo "Session variables are set.";
    ?>

</body>

</html>