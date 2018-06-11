<?php   
session_start(); //to ensure you are using same session
header("Cache-Control","no-cache,no-store,must-revalidate")
session_destroy(); //destroy the session
header("location:index.php"); //to redirect back to "index.php" after logging out
exit();
?>