<!-- 5. Write a PHP script to create a new text file named "data.txt" and write "Hello,
World!" into it. -->

<?php
// Specify the file name
$filename = "data.txt";

// Open the file for writing (creates the file if it doesn't exist)
$file = fopen($filename, "w");

// Check if the file was opened successfully
if ($file) {
    // Write "Hello, World!" into the file
    fwrite($file, "Hello, World!");

    // Close the file
    fclose($file);

    echo "File '$filename' has been created and written successfully.";
} else {
    echo "Error: Unable to create or open the file.";
}
?>
