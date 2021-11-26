<?php
    $text = "Ciao php! Che piacere";

    $fromUser = $_GET["fromUser"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <main>
        <h1>
            <?php echo $text ?>
        </h1>

        <p>Lunghezza del paragrafo sopra: <?php echo strlen($text) ?></p>

        <h1>Variabile passata con GET: <?php echo str_replace("a", "***", $fromUser ) ?> </h1>

        <p>Parola originale: <?php echo $fromUser ?> <br> Lunghezza: <?php echo strlen($fromUser) ?> </p>
    </main>
</body>
</html>