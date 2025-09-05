<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $feedback = htmlspecialchars($_POST['feedback']);
    
    // You could also save to a database or send email here
    // For now, just display thanks
    echo "<h2>Thanks for sending your feedback!</h2>";
    echo "<p>You wrote: $feedback</p>";
} else {
    echo "Invalid request.";
}
?>