<!-- 1. Write PHP code to display the following information:
● Server's IP address.
● Server's name.
● Server's software. -->

<?php
// Display the server's IP address
echo "Server IP Address: " . $_SERVER['SERVER_ADDR'] . "<br>";

// Display the server's name
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";

// Display the server's software
echo "Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
?>
