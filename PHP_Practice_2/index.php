<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
        try {
            $connect = new PDO("mysql:host=tompsons.beget.tech; dbname=tompsons_example", "tompsons_example", "78919913Zero");
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            die("Ашибса! - $ex");
        }
              
        $response = $connect->prepare("SELECT * FROM Department");
        $result = $response->execute();
        
        // var_dump($response->fetch(PDO::FETCH_ASSOC));

        while($var = $response->fetch(PDO::FETCH_ASSOC)){
            echo $var['Name'] . "<br/>";
        }
        
    ?>
</body>
</html>