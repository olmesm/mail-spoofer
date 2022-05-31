<?php
$sender = $argv[1];
$receiver = $argv[2];

echo "\n\n>> Starting send to " . $receiver . " from " . $sender . "\n";

$to = "" . $receiver . "";

$subject = "TEST SPOOFING";

$message = "
<html>
<head>
    <title>This is a Spoof test.</title>
</head>
<body>
    <p>This is a Spoof test.</p>
</body>
</html>
";

$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/html; charset=iso-8859-1";

$headers[] = "To: " . $receiver . " <" . $receiver . ">";
$headers[] = "From: " . $sender . " <" . $sender . ">";

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));

echo "> Done!\n";
?>