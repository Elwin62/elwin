<?php
// Start output buffering
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Simple PHP Page</title>
</head>
<body>
    <?php
    // Display a welcome message
    echo "<h1>Hello, World!</h1>";
    echo "<p>This is a simple PHP page example.</p>";
    ?>
</body>
</html>
<?php
// Flush the output buffer
ob_end_flush();
?>
