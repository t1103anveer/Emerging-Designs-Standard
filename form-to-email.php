
<?php
  $name = $_POST['contact-name'];
  $visitor_email = $_POST['contact-email'];
  $subject = $_POST['contact-subject'];
  $message = $_POST['contact-project'];

  $email_from = 'emergingdesign@outlook.com';

  $email_subject = "New Proposal";

  	$email_body = "Customer: $name.\n".
                              "Subject: $message \n".
                              "Message: $message"

  $to = "emergingdesign@outlook.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);


?>
