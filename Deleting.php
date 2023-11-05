<?php
setcookie("userList", "", time() - 3600);// Delete the "userList" cookie

setcookie("userCourse", "", time() - 3600);// Delete the "userCourse" cookie

echo "Cookies deleted successfully."; // Display a message indicating that the cookies have been deleted successfully
?>
