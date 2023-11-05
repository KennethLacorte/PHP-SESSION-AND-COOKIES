<?php

session_start(); // Start a session

$_SESSION["userId"] = 19842;// Set session variables for userID
$_SESSION["userName"] = "John Kenneth Lacorte"; // Set session variables for userName
$_SESSION["Age"] = "20"; // Set session variables for Age

echo "Session variables set successfully."; //Prints a message to the web page indicating that the session variables have been set successfully. 
?>
