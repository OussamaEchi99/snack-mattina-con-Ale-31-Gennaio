<!-- Partendo da questo array: https://www.codepile.net/pile/Po60bjgQ
Ad ogni refresh della pagina visualizzare una pubblicità a schermo,
tenendo conto che possono essere sorteggiate solo quelle is_active true. -->
<?php
require __DIR__ . '/database.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="conatiner">
        <?php foreach ($ads as $ad) {?>
            <a href="#">
                <img src="<?php echo $ad['image_path']; ?>" alt="">
            </a>
        <?php } ?>
    </div>
</body>
</html>

<!-- <?php ?> -->