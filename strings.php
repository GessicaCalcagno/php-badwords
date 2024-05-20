<?php
$user = $_GET["paragraph"];

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
    </section>


</body>

</html>