<?php
// chat.php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $message = $_POST["message"];
    if (!empty($message)) {
        // Store the message in a file or database (you'll need to set this up)
        // For simplicity, we'll just append to a text file here.
        $message = date("H:i:s") . " - " . $message . PHP_EOL;
        file_put_contents("chat.txt", $message, FILE_APPEND);
    }
}

?>

<?php
// load_chat.php
// Load chat history (you can replace this with a database query)
$chatContent = file_get_contents("chat.txt");

// Output chat messages as HTML
echo nl2br($chatContent);
?>
