<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekap Info</title>
</head>
<body>
    <h1>Rekap Info</h1>
    <?php
    // Tangkap data dari form
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $date = isset($_POST['date']) ? $_POST['date'] : '';
    $time = isset($_POST['time']) ? $_POST['time'] : '';
    $problem = isset($_POST['problem']) ? $_POST['problem'] : '';

    // Tampilkan data jika lengkap
    if ($name && $phone && $date && $time && $problem) {
        echo "<p><strong>Nama:</strong> $name</p>";
        echo "<p><strong>Nomor Telepon:</strong> $phone</p>";
        echo "<p><strong>Tanggal:</strong> $date</p>";
        echo "<p><strong>Jam Bertemu:</strong> $time</p>";
        echo "<p><strong>Problem pada Mobil:</strong> $problem</p>";
    } else {
        echo "<p>Data tidak lengkap. Pastikan semua kolom telah diisi.</p>";
    }
    ?>
</body>
</html>
