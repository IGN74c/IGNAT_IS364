<?php include 'model/functions.php' ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
    h1,
    h2,
    p,
    a {
        font-family: Arial;
        text-decoration: none;
        color: #333;
    }

    .cards {
        display: flex;
        flex-direction: column;
        width: 40vw;
        gap: 30px;
    }

    .wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .header {
        display: flex;
        align-items: center;
        height: 50px;
        gap: 20px;
    }
</style>

<body>
    <div class="wrapper">
        <h1>Все товары:</h1>
        <div class="cards">
            <?php display_all_products() ?>
        </div>
    </div>

</body>

</html>