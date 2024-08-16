<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad = htmlspecialchars($_POST['ad']);
    $movzu = htmlspecialchars($_POST['movzu']);
    $email = htmlspecialchars($_POST['email']);
    $mektub = htmlspecialchars($_POST['mektub']);

    $file = 'data.txt';

    $data = "Ad: $ad\nmovzu: $movzu\nEmail: $email\nMəktub: $mektub\n\n";

    if (file_put_contents($file, $data)) {
        echo 'success';
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}
?>


<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Əlaqə Formu</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
          integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<div class="container mt-5">
    <h2>Əlaqə Formu</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="ad">Ad, Soyad, Ata adı</label>
            <input type="text" class="form-control" id="ad" name="ad" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="movzu">Mövzu</label>
            <input type="text" class="form-control" id="movzu" name="movzu" required>
        </div>
        <div class="form-group">
            <label for="mektub">Şərh yazın</label>
            <textarea class="form-control" id="mektub" name="mektub" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Göndər</button>
    </form>


    <style>
        body {
            background: url("blob-scene-haikei.png");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>


    <script>

    </script>
</body>
</html>
