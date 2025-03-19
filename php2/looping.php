<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contoh Soal Looping</h1>
    <?php
    echo "<h3>Contoh Soal 1</h3>";
    
    echo "<h4>Looping 1</h4>";
    $i=1;
    while($i<=19){
        echo "$i - Angka Ganjil <br>";
        $i+=2;
    }

    echo "<h4>Looping 2</h4>";
    $a=19;
    while($a>=1){
        echo "$a - Angka Ganjil <br>";
        $a-=2;
    }

    echo "<h3>Contoh Soal 2</h3>";

    $angka = [30,46,39,44,55];

    echo "Angka : ";
    print_r($angka);
    echo "<br>";
    echo "Angka Sisa bagi 3 : " ; 
    
    foreach($angka as $nilai){
        $rest[] = $nilai % 3;
    }

    print_r($rest);

    echo "<h3>Contoh Soal 3</h3>";

    $multiArray = [
        ["001", "Rezky", "Makassar"],
        ["002", "Thio", "Bandung"],
        ["003", "Hafiz", "Jakarta"],
        ["004", "Budi", "Semarang"]
    ];

    foreach($multiArray as $arraydata){
        $items= [
            "id" => $arraydata[0],
            "nama" => $arraydata[1],
            "kota" => $arraydata[2],
        ];

        print_r($items);
        echo "<br>";
    }

    echo "<h3>Contoh Soal 4</h3>";

    for($j=1; $j<=5; $j++){
        for($k=$j; $k<=5; $k++){
            echo $k;
        }
        echo "<br>";
    }


    ?>
</body>
</html>