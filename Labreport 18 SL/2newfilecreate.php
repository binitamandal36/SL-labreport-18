<!-- 6. Develop a PHP script to read the contents of the file "data.txt" created in the
previous task and display it on the web page. -->

<?php
// Specify the file name
$filename = "data.txt";

// Check if the file exists
if (file_exists($filename)) {
    // Read the contents of the file
    $content = file_get_contents($filename);

    // Display the content on the web page
    echo "Contents of the file '$filename':<br>";
    echo nl2br(htmlspecialchars($content));
} else {
    echo "Error: The file '$filename' does not exist.";
}
?>
