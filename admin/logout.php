<?php
    session_start();

    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Expire the cookie by setting its expiration time to a past value
    setcookie("PHPSESSID", "", time() - 3600, '/');

    // Redirect to the index page
    header("location: ../index.php");
    exit; // Make sure to exit after the redirection
?>
