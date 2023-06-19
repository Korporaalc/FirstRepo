<?php
session_start();
include("functions.php");

if (isset($_POST['sp1'])) {
    header('Location: Speler_1.php?random=true');
}

if (isset($_POST['sp2'])) {
    header('Location: Speler_2.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>galgje</title>
    <style>
        body {
            background-color: beige;
        }
    </style>
</head>

<body>
    <div class="container-sm">
        <header class="row justify-content-center">
            <div class="col-6 text-center">
                <h1>Welcome to Hangman!</h1>
            </div>
        </header>

        <section>
            <div class="row d-felx justify-content-center">
                <div class="text-center w-65 m-3">
                    <h1>spelregels galgje</h1>
                    <p class="p-3 col-12 d-flex justify-content-center">
                        Bij het spel Galgje gaat het erom dat je het woord gaat raden dat diegene heeft genoteerd (maar wat je niet kan zien). Je gaat losse letters raden. Je mag maar een beperkt aantal fouten maken. Als je een fout maakt dan wordt een streepje van de galg getekend.
                        Daaraan komt een mannetje te hangen, per fout wordt het mannetje zichtbaar en wanneer hij helemaal zichtbaar is heb je verloren
                    </p>
                </div>
            </div>
        </section>
        <section>
            <div class=" row m-3">
                <form method="post" class="d-flex justify-content-around">
                    <button class="rounded-pill border border-dark btn btn-primary" type="submit" name="sp1">1 Speler</button>
                    <button class="rounded-pill border border-dark btn btn-primary" type="submit" name="sp2">2 Spelers</button>
                </form>
            </div>
    </div>
    </section>
</body>

</html>