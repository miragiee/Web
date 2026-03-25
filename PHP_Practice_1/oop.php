<?php
    include "Person.php";

    $Onatole = new Person("Онатоле", "Яндекс", 10000);
    $Onatole->GoToWork();

    echo "<br>";
    echo $Onatole->SetName("Анатолий");
    echo $Onatole->GetName();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ООП</title>
</head>
<body>
    
</body>
</html>