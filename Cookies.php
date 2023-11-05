<?php
$userName = "JOHN KENNETH D. LACORTE"; //This line defines a variable called $userName and assigns the value "JOHN KENNETH D. LACORTE" to it that representing the username
$userCourse = "IT"; //A variable called $userCourse is defined and assigned the value "IT," representing the user's course.
$expiration_time = time() + 3.5 * 3600; //This line calculates the expiration time for the cookies. It adds 3.5 hours (3.5 * 3600 seconds) to the current time using the time() function.

setcookie("userList", $userName, $expiration_time); // Set the "userList" cookie with the user's name and the calculated expiration time
setcookie("userCourse", $userCourse, $expiration_time); //Set the "userCourse" cookie with the user's course and the same expiration time

echo "Cookies set successfully."; // Display a message indicating that cookies have been set successfully
?>


