<?php

// Get the current directory
$directory = __DIR__;

// Open the directory
$dirHandle = opendir($directory);

// Read directory contents
while (($file = readdir($dirHandle)) !== false) {
    // Exclude "." and ".." directories
    if ($file != "." && $file != "..") {
        echo $file . PHP_EOL;
    }
}

// Close the directory handle
closedir($dirHandle);
?>
