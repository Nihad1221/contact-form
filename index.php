<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Əlaqə Formu</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Əlaqə Formu</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ad = htmlspecialchars($_POST['ad']);
            $soyad = htmlspecialchars($_POST['soyad']);
            $email = htmlspecialchars($_POST['email']);
            $mektub = htmlspecialchars($_POST['mektub']);

            $file = 'data.txt';

            $data = "Ad: $ad\nSoyad: $soyad\nEmail: $email\nMəktub: $mektub\n\n";

            if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX)) {
                echo '<div class="alert alert-success" role="alert">Məlumatlar uğurla yadda saxlanıldı.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Məlumatlar yadda saxlanılarkən xəta baş verdi.</div>';
            }
        }
        ?>

        <form action="index.php" method="post">
            <div class="form-group">
                <label for="ad">Ad</label>
                <input type="text" class="form-control" id="ad" name="ad" required>
            </div>
            <div class="form-group">
                <label for="soyad">Soyad</label>
                <input type="text" class="form-control" id="soyad" name="soyad" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="mektub">Məktub</label>
                <textarea class="form-control" id="mektub" name="mektub" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Göndər</button>
        </form>
    </div>

</body>
</html>
