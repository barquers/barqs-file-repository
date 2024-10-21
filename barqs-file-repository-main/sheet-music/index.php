<?php
// Directory where files are stored
$directory = '.'; // Current directory

function listFiles($directory) {
    echo "<ul>";
    $files = scandir($directory);
    foreach ($files as $file) {
        if ($file == '.' || $file == '..' || $file == 'index.php' || $file == 'custom.css') continue; // Skip current directory, parent directory, and unnecessary files

        // Display files with download link
        if (!is_dir($file)) {
            echo "<li><a href='$file' download>$file</a></li>";
        }
    }
    echo "</ul>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subdirectory Files</title>
    <link rel="stylesheet" href="custom.css"> <!-- Link to custom CSS -->
</head>
<body>
    <div class="container">
        <h1>Files in Subdirectory</h1>
        <p>Below is a list of files you can download:</p>
        <?php listFiles($directory); ?>
        <a href="../">Back to Main Directory</a>
    </div>
</body>
</html>

