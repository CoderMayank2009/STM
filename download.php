<?php
$file = $_GET['file'];

// Set the content type and headers for downloading
header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="' . basename($file) . '"');
header('Content-Length: ' . filesize($file));

// Output an empty string to simulate an empty file
echo '';

// Exit to prevent further execution
exit;
?>
