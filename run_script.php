<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$pythonScriptPath = __DIR__ . '/Generate_Text.py';

echo "Looking for script at: " . $pythonScriptPath . "<br>";

if (!file_exists($pythonScriptPath)) {
    die("❌ Script not found.");
}

// Execute Python script
$command = 'python ' . escapeshellarg($pythonScriptPath) . ' --headless 2>&1';
echo "Executing command: <strong>$command</strong><br><br>";

$output = shell_exec($command);
echo "<pre>" . htmlspecialchars($output) . "</pre>";
?>