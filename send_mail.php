<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "sc986404@gmail.com";  // your email
    $subject = "New Booking from Website";

    // Build the email content
    $message = "New Booking Details:\n\n";
    $message .= "Name: " . htmlspecialchars($_POST['name']) . "\n";
    $message .= "Email: " . htmlspecialchars($_POST['email']) . "\n";
    $message .= "Phone: " . htmlspecialchars($_POST['phone']) . "\n";
    $message .= "Pickup Location: " . htmlspecialchars($_POST['pickup']) . "\n";
    $message .= "Drop Location: " . htmlspecialchars($_POST['drop']) . "\n";
    $message .= "Date: " . htmlspecialchars($_POST['date']) . "\n";
    $message .= "Time: " . htmlspecialchars($_POST['time']) . "\n";
    $message .= "Vehicle Type: " . htmlspecialchars($_POST['vehicle']) . "\n";
    $message .= "Special Requests: " . htmlspecialchars($_POST['requests']) . "\n";

    $headers = "From: " . htmlspecialchars($_POST['email']);

    // Send email
    if(mail($to, $subject, $message, $headers)){
        $success = "Booking submitted successfully! We'll contact you soon.";
    } else {
        $error = "Error sending booking. Please try again later.";
    }
}
?>
