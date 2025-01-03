<!-- process.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture the form data from POST
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    echo "<h2>Form Data Received</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Message:</strong> $message</p>";
} else {
    echo "<p>No data received.</p>";
}
?>
