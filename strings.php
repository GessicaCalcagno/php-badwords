<?php
$user = $_GET["paragraph"];
$word = $_GET["censor_word"];


// Sostituisco la parola da censurare con ***
// $censored_paragraph = str_replace($word, '***', $user);

//str_ireplace — Versione insensibile alle miuscole/minuscole di str_replace()
$censored_paragraph = str_ireplace($word, '***', $user);

// Lunghezza del paragrafo censurato
$censored_length = strlen($censored_paragraph);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word</title>
</head>

<body>


    <section>
        <h3>Stampo il paragrafo</h3>
        <p>
            <?php echo $user; ?>
        </p>
        <h6>La sua lunghezza</h6>
        <p>
            <?php echo strlen($user); ?>
        </p>
        <hr>
    </section>

    <section>
        <h3>Stampo con ***</h3>
        <p>
            <?php echo  $censored_paragraph; ?>
        </p>
        <h6>La sua lunghezza</h6>
        <p>
            <?php echo $censored_length; ?>
        </p>
    </section>


</body>

</html>