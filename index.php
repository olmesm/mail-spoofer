<?php
echo "\n\n>> Starting send to " . $_ENV["RECEIVER"] . ' from ' . $_ENV["SENDER"] . "\n";

$to = $_ENV["RECEIVER"];

$subject = 'TEST SPOOFING';

$message = '
<html>
<head>
    <title>This is a Spoof test.</title>
</head>
<body>
    <p>This is a Spoof test.</p>
</body>
</html>
';

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

$headers[] = 'To: ' . $_ENV["RECEIVER"] . ' <' . $_ENV["RECEIVER"] . '>';
$headers[] = 'From: ' . $_ENV["SENDER"] . ' <' . $_ENV["SENDER"] . '>';

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));

echo ">> Done!\n";
?>