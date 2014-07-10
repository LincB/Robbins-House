<?php
$to = 'lincb123@gmail.com';
$subject = 'Test HTML Email';
$message = '
<html>
    <head>
        <title>Test HTML Email</title>
    </head>
    <body>
        <a href="http://robbinshouse.hostoi.com">View Site</a>
    </body>
</html>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Robbins House Notifier <notifier@robbinshouse.hostoi.com>' . "\r\n";
//mail($to, $subject, $message, $headers);
?>
