<?php
session_start();

echo "Logging you Out Please wait......";
session_unset();
session_destroy();

echo $path;
header("location: index.php");
exit();

?>