<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Content-Type: application/json");

$uploadDir = __DIR__ . '/uploads/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
    ini_set('upload_max_filesize', '500M');
    ini_set('post_max_size', '500M');
    ini_set('memory_limit', '512M');
    ini_set('max_execution_time', '300');
}

$response = [
    'uploaded_files' => [],
    'duplicate_files' => []
];

if (!empty($_FILES['music_files']['name'][0])) {
    foreach ($_FILES['music_files']['name'] as $i => $name) {
        $tmp_name = $_FILES["music_files"]["tmp_name"][$i];
        $destination = $uploadDir . basename($name);

        if (is_uploaded_file($tmp_name)) {
            if (file_exists($destination)) {
                // 🔁 Skip if already exists
                $response['duplicate_files'][] = $name;
            } else {
                if (move_uploaded_file($tmp_name, $destination)) {
                    $response['uploaded_files'][] = $name;
                }
            }
        }
    }

    // Run Python script
// Run Python script
$command = 'python ' . escapeshellarg(__DIR__ . '/Generate_Text.py') . ' --headless 2>&1';
$output = shell_exec($command);
$response['output'] = $output ?? "No output from script";

// Remove duplicates from your text file after Python script runs
function removeDuplicatesFromTextFile($filePath) {
    if (!file_exists($filePath)) return;

    $jsonContent = file_get_contents($filePath);
    $tracks = json_decode($jsonContent, true);

    if (!is_array($tracks)) return;

    $unique = [];
    $filtered = [];

    foreach ($tracks as $track) {
        $key = strtolower(trim($track['artist'])) . '|' . strtolower(trim($track['title'])) . '|' . trim($track['duration']);

        if (!isset($unique[$key])) {
            $unique[$key] = true;
            $filtered[] = $track;
        }
    }

    file_put_contents($filePath, json_encode($filtered, JSON_PRETTY_PRINT));
}

removeDuplicatesFromTextFile(__DIR__ . '/Exclusive_Music_List.txt');

$response['success'] = true;
} else {
    $response['error'] = "No files uploaded.";
    $response['success'] = false;
}

echo json_encode($response, JSON_PRETTY_PRINT);
?>
