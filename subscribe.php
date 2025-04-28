<?php
echo "Hi";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email address from the form
    $userEmail = filter_var($_POST['userEmail'], FILTER_SANITIZE_EMAIL);

    // Basic validation to make sure it's a valid email
    if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }
    else{
        echo $userEmail;
    }

//     // Set the email parameters
//     $to = "onanbasnet@gmail.com";  
//     $subject = "New Email Subscription";
//     $message = "New subscriber: " . $userEmail;
//     $headers = "From: no-reply@google.com\r\n";
//     $headers .= "Reply-To: no-reply@google.com\r\n";
//     $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

//     // Send the email
//     if (mail($to, $subject, $message, $headers)) {
//         echo "Thank you for subscribing!";
//     } else {
//         echo "There was an error, please try again.";
//     }
// } else {
//     echo "Invalid request method.";
// }
?>
