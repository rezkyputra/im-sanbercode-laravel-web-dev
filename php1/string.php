<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contoh String</h1>
    <?php
        echo "<h3>Contoh Soal 1</h3>";
        $kalimat1 = "Selamat Datang di Sanbercode";
        echo "Kalimat 1 : " . $kalimat1 . "<br>";
        echo "Panjang Kalimat 1 : " . strlen($kalimat1). "<br>";
        echo "Jumlah Kata Kalimat 1 : " . str_word_count($kalimat1) . "<br>";

        echo "<h3>Contoh Soal 2</h3>";
        $kalimat2 = "Hello World Dunia";
        echo "Kata 1 Kalimat 2 : " . substr($kalimat2, 0, 5) . "<br>";
        echo "Kata 2 Kalimat 2 : " . substr($kalimat2, 6, 5) . "<br>";
        echo "Kata 3 Kalimat 2 : " . substr($kalimat2, 12) . "<br>";

        echo "<h3>Contoh Soal 3</h3>";
        $kalimat3 = "Nam vel rutrum nisi. Quisque egestas est vel sapien nisi mollis ultricies. Vestibulum quis elit nisi eget eros fermentum interdum eget a.";
        echo "Kalimat 3 : " . $kalimat3 . "<br>";
        echo "Ubah Kalimat 3 : " . str_replace("nisi", "edit", $kalimat3) . "<br>";

    ?>
</body>
</html>