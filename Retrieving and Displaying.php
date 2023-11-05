
<?php

if (isset($_COOKIE["userList"]) && isset($_COOKIE["userCourse"])) {// Check if the "userList" and "userCourse" cookies are set
    $userList = $_COOKIE["userList"]; // Retrieve the value of "userList" cookie
    $userCourse = $_COOKIE["userCourse"]; // Retrieve the value of "userCourse" cookie
    echo "<br>Value of userList: " . $userList . "<br>"; // Display the value of "userList" with a label
    echo "Value of userCourse: " . $userCourse; // Display the value of "userCourse" with a label
} else {// If either of the cookies is not set, this block of code is executed
    echo "<br>Cookies not set."; //: Displays a message indicating that the cookies are not set
}
?>
