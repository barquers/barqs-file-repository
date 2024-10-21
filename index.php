<?php
// Directory where files are stored
$base_directory = '.'; // Current directory

function listDirectories($directory) {
    echo "<ul>";
    $items = scandir($directory);
    foreach ($items as $item) {
        if ($item == '.' || $item == '..') continue; // Skip current and parent directories
        if (!is_dir("$directory/$item")) continue; // Only show directories

        // Link to subdirectory
        echo "<li><strong><a href='$item'>$item</a></strong></li>";
    }
    echo "</ul>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My File Repository</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to CSS -->
</head>
<body>
    <div class="container">
        <h1>Welcome to My File Repository</h1>
        <p>Here you can find and download files. Feel free to browse!</p>
        <?php listDirectories($base_directory); ?>
    </div>
</body>
</html>


