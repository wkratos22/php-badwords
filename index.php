<?php
    $lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea perspiciatis sequi praesentium veniam molestiae, porro iusto eum natus odio pariatur obcaecati, temporibus reprehenderit nobis officia deserunt fuga similique dolore esse.";

    $parametroUri = ( isset( $_GET["nome"] ) ) ? $_GET["nome"] : "";

    $parametro2 = $_GET["parametro2"];
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
    <p><?php echo $lorem; ?></p>

    <p><?php echo $parametroUri ?></p>

    <p>La lunghezza del testo è: <?php echo strlen( $lorem ) ?></p>

    <p>Inserisci la parola da censurare:</p>

    <form method="GET">
        <input type="text" name="parametro2">
        <button type="submit">INVIA</button>
    </form>

    <p>
        <?php echo str_replace($parametro2, "***", $lorem)?>
    </p>
</body>
</html>


