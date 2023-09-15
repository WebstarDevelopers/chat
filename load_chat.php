<?php
// load_chat.php
// Load chat history (you can replace this with a database query)
$chatContent = file_get_contents("chat.txt");

// Output chat messages as HTML
echo nl2br($chatContent);
?>
