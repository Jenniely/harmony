<?
$mail_to_send_to = "rcb.landscapers@gmail.com";
$from_email = "from@rcb-landscaping.com";
$submit = $_REQUEST['submit'];    
$name=$_REQUEST['name'];
if ( $submit == "send" )
        {
                $subject= "Message subject";
                $email = $_REQUEST['email'] ;
                $message= "\r\n" . "Name: $name" . "\r\n"; //get recipient name in contact form
                $message = $message.$_REQUEST['message'] . "\r\n" ;//add message from the contact form to existing message(name of the client)
                $headers = "From: $from_email" . "\r\n" . "Reply-To: $email"  ;
                mail( $mail_to_send_to, $subject, $message, $headers );
                header("Location: /index.html#contact-us");
        }
        ?>
