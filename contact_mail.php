<?php 
if(isset($_POST['submit'])){
    $to = "teamcharites@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['number'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " " . $number . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    echo "<a href=\\"https://charites-networthapp.herokuapp.com\\">Click here to visit site</a>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>