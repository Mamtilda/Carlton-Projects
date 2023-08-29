<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $companyname = $_POST["companyname"];
    $email = $_POST["email"];
    $telephonenumber = $_POST["telephonenumber"];
    $address = $_POST["address"];
    $postcode = $_POST["postcode"];
    $subject = $_POST["subject"];

    // Create the email message
    $message = "First Name: $firstname\n"
        . "Last Name: $lastname\n"
        . "Company Name: $companyname\n"
        . "Email: $email\n"
        . "Telephone Number: $telephonenumber\n"
        . "Address: $address\n"
        . "Postcode: $postcode\n"
        . "Subject: $subject\n";

    // Set up email headers
    $headers = "From: $email\r\n"
        . "Reply-To: $email\r\n"
        . "X-Mailer: PHP/" . phpversion();

    
    $to = "mamtathind195@gmail.com";
    $subject = "New Contact Form Submission";

    // Send the email
    $mail_sent = mail($to, $subject, $message, $headers);
	

    if ($mail_sent) {
        header("Location: action_page.html"); // Redirect to action page
        exit();
    } else {
        echo "Error sending email. Please try again later.";
    }
}
?>
