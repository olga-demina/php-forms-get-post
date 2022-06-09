<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="server.php" method="post">
        <div>
            <label for="user-name">Nome</label>
            <input type="text" name="name" id="user-name">
        </div>

        <div>
            <label for="user-lastname">Cognome</label>
            <input type="text" name="lastname" id="user-lastname">
        </div>

        <button type="submit">Invia dati</button>
    </form>

</body>

</html>