<!-- 8. Create a PHP script that reads the content of a file named "essay.txt" character by character using fgetc(). 
Count the number of words in the essay and dispaly the word count on the web page. -->

<?php
// Specify the file name
$filename = "essay.txt";

// Check if the file exists
if (file_exists($filename)) {
    // Open the file for reading
    $file = fopen($filename, "r");

    // Check if the file was opened successfully
    if ($file) {
        $content = ""; // Variable to store the file content

        // Read the file character by character
        while (($char = fgetc($file)) !== false) {
            $content .= $char; // Append each character to the content
        }

        // Close the file
        fclose($file);

        // Count the number of words in the content
        $wordCount = str_word_count($content);

        // Display the word count
        echo "The essay contains $wordCount words.";
    } else {
        echo "Error: Unable to open the file '$filename'.";
    }
} else {
    echo "Error: The file '$filename' does not exist.";
}
?>
