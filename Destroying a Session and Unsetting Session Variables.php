<?php

session_start();// Start a session

session_unset();// Unset all session variables

session_destroy();// Destroy the session

echo "Session destroyed and variables unset successfully."; //// Display a message indicating that the session has been destroyed and variables unset successfully
?>
