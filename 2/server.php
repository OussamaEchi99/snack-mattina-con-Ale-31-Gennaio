<?php

$nomi = ['alessio', 'tony', 'alberto'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(in_array($_GET["name"], $nomi )) { ?>
        <?php echo 'Accesso Eseguito' ?>
    <?php } else { ?>
        <?php echo 'Accesso Negato' ?>
    <?php } ?>
</body>
</html>