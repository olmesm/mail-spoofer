<?php
echo "\n\n>> Starting send to " . $_ENV["RECEIVER"] . ' from ' . $_ENV["SENDER"] . "\n";

$to = $_ENV["RECEIVER"];

$subject = 'TESTING SPOOFING';

$message = '
<html>
<head>
    <title>Birthday Reminders for August</title>
</head>
<body>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed vestibulum nunc, sed ullamcorper quam. Donec sed ligula in quam semper interdum. Vestibulum erat erat, bibendum eget nunc nec, ultrices tincidunt orci. Quisque magna velit, faucibus eu facilisis quis, cursus in nibh. Vivamus pellentesque nisl at libero tincidunt feugiat. In in est neque. Maecenas consectetur commodo tortor at finibus. Mauris eu leo ipsum. Praesent tempor felis nisl, in accumsan est dictum et.</p>
    <p>Duis nec sollicitudin mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris condimentum erat vitae lorem viverra, lobortis iaculis enim tincidunt. Vestibulum tempus ex eget nunc vulputate tempus. Phasellus pulvinar imperdiet ligula in iaculis. Morbi ac gravida mi. Proin ipsum sapien, sodales id sodales sed, blandit id tortor. In vel ipsum a quam ornare tristique. Maecenas eget faucibus odio. Phasellus lacinia auctor urna vel mollis. Donec sollicitudin vitae lorem nec congue. Donec lacinia mattis diam, non elementum odio facilisis nec.</p>
    <p>Aliquam efficitur vitae libero non suscipit. Sed nisl dolor, maximus a magna eget, blandit malesuada felis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque molestie at diam in mollis. Aliquam auctor volutpat ligula ac fermentum. Morbi lacinia augue sed sem porttitor ornare. Praesent lobortis vestibulum leo, ac molestie nunc fringilla a. Quisque eleifend quis tortor non rhoncus.</p>
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