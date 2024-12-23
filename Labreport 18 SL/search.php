<!-- 7. Write a PHP script that reads lines from a file named "search.txt" using fgets().
Continue reading until a specific string "STOP" is encountered. Display all lines
read before encountering "STOP" on the web page. -->

<?php
// Specify the file name
$filename = "search.txt";

// Check if the file exists
if (file_exists($filename)) {
    // Open the file for reading
    $file = fopen($filename, "r");

    // Check if the file was opened successfully
    if ($file) {
        echo "Lines read from the file '$filename' before encountering 'STOP':<br>";

        // Read the file line by line
        while (($line = fgets($file)) !== false) {
            // Trim whitespace from the line
            $trimmedLine = trim($line);

            // Check if the line contains "STOP"
            if ($trimmedLine === "STOP") {
                break; // Stop reading further
            }

            // Display the line
            echo htmlspecialchars($trimmedLine) . "<br>";
        }

        // Close the file
        fclose($file);
    } else {
        echo "Error: Unable to open the file '$filename'.";
    }
} else {
    echo "Error: The file '$filename' does not exist.";
}
?>
