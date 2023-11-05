<?php

session_start();// Start a session

// Retrieve and display the values of the session variables
if (isset($_SESSION["userId"]) && isset($_SESSION["userName"]) && isset($_SESSION["Age"])) { // Check if the session variables "userId," "userName," and "Age" are set
    $userId = $_SESSION["userId"]; //Retrieves the value of "userId" from the session and assigns it to the variable $userId
    $userName = $_SESSION["userName"]; // Retrieves the value of "userName" from the session and assigns it to the variable $userName
    $age = $_SESSION["Age"]; //Retrieves the value of "Age" from the session and assigns it to the variable $age
    echo "userId: $userId<br>"; //Displays the value of "userId" along with a label
    echo "userName: $userName<br>"; // Displays the value of "userName" along with a label
    echo "Age: $age"; //Displays the value of "Age" along with a label
} else { // If any of the session variables are not set, this block of code is executed
    echo "Session variables not set."; //Displays a message indicating that the session variables are not set
}
?>