<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $user_name = $_POST["name"];
    var_dump($user_name);
    ?>

    <?php if (empty($_POST["name"]) || empty($_POST["lastname"])) { ?>
        <h1>Mancano dati</h1>
        <a href="index.php">Ritorna nella pagina home</a>
    <?php } else { ?>

        <?php
        $user_name = $_POST["name"];
        $user_lastname = $_POST["lastname"];
        ?>

        <h1>Ciao <?php echo $user_name . " " . $user_lastname; ?></h1>
    <?php } ?>

</body>

</html>