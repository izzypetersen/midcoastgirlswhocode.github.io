<html>
  <head>
    <title> Thank you for submitting your comments! </title>
  </head>

  <body>
    <?php
      $name = $_Post['name'];
      $visitor_email = $_Post['email'];
      $message = $_Post['message'];

      $email_from = 'wendyliang714@gmail.com';
      $email_subject = "New Form Submission";
      $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "User Message: $message.\n";

      $to = "wendyliang714@gmail.com";
      $headers = "From: $email_from \r\n";
      $headers .= "Reply_To: $visitor_email \r\n";
      mail ($to,$email_subject,$email_body,$headers);
      header("Location: index.html");
     ?>
  </body>
</html>  
