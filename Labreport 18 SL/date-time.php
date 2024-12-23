<!-- 3. Write PHP code to display the current date and time in the following formats:
● YYYY-MM-DD HH:MM:SS
● Day of the week, Month DD, YYYY -->

<?php
// Display the current date and time in YYYY-MM-DD HH:MM:SS format
echo "Current Date and Time (YYYY-MM-DD HH:MM:SS): " . date("Y-m-d H:i:s") . "<br>";

// Display the current date in "Day of the week, Month DD, YYYY" format
echo "Current Date (Day of the week, Month DD, YYYY): " . date("l, F d, Y") . "<br>";
?>
