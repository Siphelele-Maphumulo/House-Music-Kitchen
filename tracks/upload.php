<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$uploadDir = __DIR__ . '/uploads/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

if (!empty($_FILES['music_files']['name'][0])) {
    foreach ($_FILES['music_files']['name'] as $i => $name) {
        $tmp_name = $_FILES["music_files"]["tmp_name"][$i];
        if (is_uploaded_file($tmp_name)) {
            move_uploaded_file($tmp_name, $uploadDir . basename($name));
        }
    }

    // Run Python script
    $command = 'python ' . escapeshellarg(__DIR__ . '/Generate_Text.py') . ' --headless 2>&1';
    $output = shell_exec($command);
    echo "<pre>" . htmlspecialchars($output) . "</pre>";
} else {
    echo "No files uploaded.";
}
?>