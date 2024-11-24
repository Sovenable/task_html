<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="styles.css">
    <script src="validation.js" defer></script>
</head>
<body>
    <h1>Form Pendaftaran</h1>
    <form action="process.php" method="POST" enctype="multipart/form-data" id="registrationForm">
        <label for="name">Nama (min 3 karakter):</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="age">Usia (harus angka):</label>
        <input type="number" id="age" name="age" required>
        
        <label for="gender">Jenis Kelamin:</label>
        <select id="gender" name="gender" required>
            <option value="male">Laki-laki</option>
            <option value="female">Perempuan</option>
        </select>
        
        <label for="file">Unggah File (format .txt, max 2MB):</label>
        <input type="file" id="file" name="file" accept=".txt" required>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
