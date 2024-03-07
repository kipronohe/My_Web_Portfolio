<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $project = $_POST['project'];
    $message = $_POST['message'];

    // Email information
    $to = "enckkipronoh@gmail.com";
    $subject = "New Form Submission";
    $body = "Name: $name\nEmail: $email\nProject: $project\nMessage: $message";

    // Send email
    if (mail($to, $subject, $body)) {
        header("Location: https://yourdomain.co/thanks.html");
        exit;
    } else {
        echo "Failed to send email. Please try again later.";
    }
}
?>
