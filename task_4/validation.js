document.getElementById('registrationForm').addEventListener('submit', function(event) {
    const name = document.getElementById('name').value;
    const fileInput = document.getElementById('file');
    const file = fileInput.files[0];

    if (name.length < 3) {
        alert("Nama harus terdiri dari minimal 3 karakter.");
        event.preventDefault();
    }

    if (file) {
        const allowedTypes = ['text/plain'];
        if (!allowedTypes.includes(file.type)) {
            alert("File harus berupa .txt.");
            event.preventDefault();
        }

        if (file.size > 2 * 1024 * 1024) {
            alert("Ukuran file tidak boleh lebih dari 2MB.");
            event.preventDefault();
        }
    } else {
        alert("File wajib diunggah.");
        event.preventDefault();
    }
});
