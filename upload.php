<?php
header('Content-Type: application/json');

try {
    $response = [];

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception("Invalid request method");
    }

    // Handle file uploads
    if (isset($_FILES['music_files'])) {
        $uploadDir = __DIR__ . '/uploads/';
        if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

        $uploadedFiles = [];
        foreach ($_FILES['music_files']['name'] as $i => $name) {
            $tmp_name = $_FILES['music_files']['tmp_name'][$i];
            if (is_uploaded_file($tmp_name)) {
                move_uploaded_file($tmp_name, $uploadDir . basename($name));
                $uploadedFiles[] = $name;
            }
        }
        $response['uploaded_files'] = $uploadedFiles;
    }

    // Run Python script
    $pythonScript = 'C:/xampp/htdocs/House-Music-Kitchen-main/Generate_Text.py';
    $command = "python \"$pythonScript\" 2>&1";
    exec($command, $output, $return_var);

    $response['output'] = implode("\n", $output);
    $response['success'] = ($return_var === 0);

    echo json_encode($response, JSON_PRETTY_PRINT);
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>