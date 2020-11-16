<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Aba do navegador-->
    <title>Index</title>
    
    <?php require_once './require/head_links.php';?>

</head>

<body>

    <?php require_once './require/header.php';?>

    <div id="carousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://via.placeholder.com/1600x400" class="mx-auto d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="http://via.placeholder.com/1600x400" class="mx-auto d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="http://via.placeholder.com/1600x400" class="mx-auto d-block w-100">
            </div>
        </div>
    </div>

    <main class="container">
        <h2 class="my-4">Recomendações</h2>
        <div class="row">
            <div class="col">
                1
            </div>
            <div class="col">
                2
            </div>
        </div>

        <h2 class="my-4">Mais populares</h2>
        <div class="row">
            <div class="col">
                1
            </div>
            <div class="col">
                2
            </div>
            <div class="col">
                3
            </div>
            <div class="col">
                4
            </div>
        </div>

        <h2 class="my-4">Novidades</h2>
        <div class="row">
            <div class="col">
                1
            </div>
            <div class="col">
                2
            </div>
        </div>

        <h2 class="my-4">Autores</h2>
        <div class="row">
            <div class="col">
                1
            </div>
            <div class="col">
                2
            </div>
            <div class="col">
                3
            </div>
            <div class="col">
                4
            </div>
        </div>

        <h2 class="my-4">Sagas</h2>
        <div class="row">
            <div class="col">
                1
            </div>
            <div class="col">
                2
            </div>
        </div>

        <h2 class="my-4">Gêneros</h2>
        <div class="row">
            <div class="col">
                1
            </div>
            <div class="col">
                2
            </div>
        </div>

    </main>

    <?php require_once './require/footer.php';?>

</body>

</html>