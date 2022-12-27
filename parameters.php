<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>

    <?php 
      $number1 = $_GET["a"];
      $number2 = $_GET["b"];
    ?>
</head>
<body>
    <?php 
      echo "A soma é ". ($number1 + $number2);
      echo "<br/>A parte inteira de $number1 é ". intval($number1);
    ?>
</body>
</html>