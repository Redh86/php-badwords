<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- in php una variabile con una frase, stampare a video la frase e la lunghezza, stampare in output la frase sostituendo le parole con _get con *** -->
<?php
$frase = "Se il coniglio ti ruba gli agli, togligli gli agli e tagliagli gli artigli";
$badword = $_GET["badword"];
$fraseFiltrata = str_replace($badword, "***", $frase);
?>

<h1>La frase è di <?php echo strlen($frase)?> caratteri</h1>
<p><?php echo ($frase)?></p>
<p><?php echo ($fraseFiltrata)?></p>
</body>
</html>