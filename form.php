<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate the input data (as shown in the previous example)

    $yourName = trim($_POST['your_name']);
    $yourEmail = filter_var($_POST['your_email'], FILTER_VALIDATE_EMAIL);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);


    // Process the form data (for this example, we'll just print the data)
    echo "Your Name: " . $yourName . "<br>";
    echo "Your Email: " . $yourEmail . "<br>";
    echo "Subject: " . $subject . "<br>";
    echo "Message: " . $message . "<br>";

    // Compose the email message
    $to = "kokateshraddha200@gmail.com"; // Replace with the recipient's email address
    $subject = "New Form Submission from portfolio";
    $message = "Name: " . $yourName . "\r\n";
    $message .= "Email: " . $yourEmail . "\r\n";
    $message .= "Subject: " . $subject . "\r\n";
    $message .= "Message: " . $message . "\r\n";

    // Set additional headers
    $headers = $yourEmail ; // Replace with the sender's email address
    $headers .= "\r\n"; // Add a newline to separate headers

    // Send the email using the mail() function
    $mailSent = mail($to, $subject, $message, $headers);

    // Check if the email was sent successfully
    if ($mailSent) {
        echo "Thank you! Your message has been sent successfully.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
