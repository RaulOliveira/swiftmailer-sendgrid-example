<?php

require_once './bootstrap.php';

try {
    
    $subject        = 'Test SwiftMail and Sendgrid';
    $from           = ['emailfrom@example.com'];
    $to             = ['emailto@example.com'];
    $attachmentPath = 'Swiftmailer.pdf';
    
    if ( empty($from) ) {
        throw new Exception('"FROM" undefined');
    }
    
    if ( empty($to) ) {
        throw new Exception('"TO" undefined');
    }
    
    /** @var Twig\Environment $twig */
    $body = $twig->render('email-layout.twig', ['name' => 'Client', 'body'=> 'This is only a test']);
    
    $message = (new Swift_Message($subject))
      ->setFrom($from)
      ->setTo($to)
      ->setBody($body, 'text/html')
      ->attach(Swift_Attachment::fromPath($attachmentPath));
      ;

    /** @var Swift_Mailer $mailer */
    $mailer->send($message);
    
    exit('Email sended!');
    
} catch(Throwable $error) {
    exit($error->getMessage());
}

?>