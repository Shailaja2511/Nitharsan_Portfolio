<!-- 
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Retrieve form data
//     $name = isset($_POST['name']) ? $_POST['name'] : 'No name provided';
//     $email = isset($_POST['email']) ? $_POST['email'] : 'No email provided';
//     $subject = isset($_POST['subject']) ? $_POST['subject'] : 'No subject provided';
//     $message = isset($_POST['message']) ? $_POST['message'] : 'No message provided';
//     $to = 'nitharsannagendram@gmail.com'; //<-- Enter your E-Mail address here.

//     // Prepare email body
//     $body = "From: $name <br> E-Mail: $email <br> Message: <br> $message";

//     // Set email headers
//     $headers  = 'MIME-Version: 1.0' . "\r\n";
//     $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
//     $headers .= 'From:' . $email . "\r\n";
//     $headers .= 'Cc:' . $email . "\r\n";

//     // Send the email
//     if (mail($to, "New Message from Website: $subject", $body, $headers)) {
//         // Display the user input after the email is sent
//         echo "<h3>Message Sent Successfully!</h3>";
//         echo "<p><strong>Name:</strong> $name</p>";
//         echo "<p><strong>Email:</strong> $email</p>";
//         echo "<p><strong>Subject:</strong> $subject</p>";
//         echo "<p><strong>Message:</strong> $message</p>";
//     } else {
//         // If mail fails to send, display the error
//         echo "<h3>Something went wrong. Failed to send the message.</h3>";
//         error_reporting(E_ALL); // Show all PHP errors
//         ini_set('display_errors', 1); // Ensure errors are visible
//     }
// }
// ?
