   
<?php 
if(isset($_POST['submit'])){
    $to = "joana_mafalda_magalhaes@hotmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name']; // senders name
    $subject = "subject";
    $message = $name." you have written :" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your email" . $name . "\n\n" . $_POST['message'];

    $headers = "From :" . $from;
    $headers2 = "To :" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject,$message2,$headers2); // sends a copy of the message to the sender
    echo "Sent! Thank you " . $name . ", I'll contact you ASAP.";
    }
?>