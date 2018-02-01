<?php 
if(isset($_POST['submit'])){
    $to = "glenn@lockstitchrigging.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    // $last_name = $_POST['last_name'];
    $subject = "Rigging Inquiry";
    // $subject2 = "Copy of your form submission";
    $message = $first_name . " submitted this message:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    header('Location: index.html');
    // You cannot use header and echo together. It's one or the other.
    }
?>