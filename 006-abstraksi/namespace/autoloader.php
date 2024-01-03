<?php

spl_autoload_register(function ($class) {
    // Convert namespace separators (\) to directory separators (/)
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    // Debugging: Output the file path being included
    echo "Including: " . __DIR__ . DIRECTORY_SEPARATOR . $classPath . '.php<br>';

    // Include the class file based on the namespace and directory structure
    require_once __DIR__ . DIRECTORY_SEPARATOR . $classPath . '.php';
});