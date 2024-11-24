<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $age = trim($_POST['age']);
    $gender = trim($_POST['gender']);
    $file = $_FILES['file'];

    $errors = [];
    if (strlen($name) < 3) {
        $errors[] = "Nama harus terdiri dari minimal 3 karakter.";
    }

    if ($file['type'] !== 'text/plain') {
        $errors[] = "File harus berupa .txt.";
    }

    if ($file['size'] > 2 * 1024 * 1024) {
        $errors[] = "Ukuran file tidak boleh lebih dari 2MB.";
    }

    if (!empty($errors)) {
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
        exit;
    }

    $fileContent = file_get_contents($file['tmp_name']);
    $lines = explode("\n", $fileContent);

    session_start();
    $_SESSION['data'] = compact('name', 'email', 'age', 'gender', 'fileContent', 'lines');
    header('Location: result.php');
    exit;
}
?>
