<?php
include_once 'includes/mailer.php';

$message = <<<EOT
<p>Hello world,</p>
<p>This is 2006 and life is kicking with PHP 4!</p>
EOT;

$mailer = new Mailer();
$mailer->sendMessage($message, 'jisse@yireo.com', 'Hello World');
?>