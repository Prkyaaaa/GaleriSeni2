<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Hubungi Kami</h1>
        <form action="send_email.php" method="post" class="border p-4 rounded shadow">
            <div class="mb-3">
                <label for="name" class="form-label">Nama:</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email Anda" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Pesan:</label>
                <textarea id="message" name="message" rows="5" class="form-control" placeholder="Tulis pesan Anda" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Kirim</button>
        </form>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
