<!-- 2. Create a PHP script that demonstrates the use of $GLOBALS to access variables
across different scopes. -->

<?php
// Define a global variable
$globalVar = "Hello, World!";

function accessGlobalVar() {
    // Access the global variable using $GLOBALS
    echo "Accessed inside function: " . $GLOBALS['globalVar'] . "<br>";

    // Modify the global variable
    $GLOBALS['globalVar'] = "Modified inside function!";
}

// Call the function
accessGlobalVar();

// Display the modified global variable
echo "Accessed outside function: " . $globalVar . "<br>";
?>
