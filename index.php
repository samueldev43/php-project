<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
</head>
<?php 

$a = ["Client1","Client2"]; 

?>
<body>
    <?php foreach($a as $clients): ?>
     <p><?=$clients;?></p>
    <?php endforeach; ?>
</body>
</html>