<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contoh Array</h1>
    <?php
    $trainer = ["rezky", "Thio", "Arya", "Fikri", "Abdul"];

    print_r($trainer);

    echo "<p> Total Trainer : " . count($trainer) . "</p>";
    echo "<ol>";
    echo "<li>" . $trainer[0]. "</li>";
    echo "<li>" . $trainer[1]. "</li>";
    echo "<li>" . $trainer[2]. "</li>";
    echo "<li>" . $trainer[3]. "</li>";
    echo "<li>" . $trainer[4]. "</li>";
    echo "</ol>";

    $bioTrainer = [
        ["id" => "001", "nama" => "Rezky" , "kelas" => "Laravel"],
        ["id" => "002", "nama" => "Thio" , "kelas" => "Phyton"],
        ["id" => "003", "nama" => "Abdul" ,"kelas" => "Golang"],
        ["id" => "004", "nama" => "Arya" ,"kelas" => "ReactJS"]
    ];

    echo "<pre>";
    print_r($bioTrainer);
    echo "</pre>";

    ?>
</body>
</html>