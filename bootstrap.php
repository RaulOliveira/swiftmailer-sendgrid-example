<?php
require_once './vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig   = new \Twig\Environment($loader, [
    'cache' => false
]);

$username  = getenv('USER');
$password  = getenv('SENDGRID_KEY');
$host      = getenv('HOST');

$transport = (new Swift_SmtpTransport($host, 587, 'tls'))
  ->setUsername($username)
  ->setPassword($password)
;

$mailer = new Swift_Mailer($transport);

