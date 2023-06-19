<?php
session_start();
include("./functions.php");
GameReset();
if (isset($_GET['random'])) {
    $_SESSION['word'] = WordGenerator();
}
if (isset($_POST["letter"])) {
    var_dump($_POST["letter"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>galgje 1 Speler</title>
    <style>
        body {
            background-color: beige;
        }

        .alignmentimg {
            width: auto;
            height: 400px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <header class="column d-flex justify-content-around text-center col-12">
                <h1>1 Speler</h1>
                <h1>geraden letters</h1>
            </header>
            <div class="col-8">
                <img class="w-50" src="galg.png" alt="galg1">
            </div>
            <div class="container col-4">
                <div class="">
                    <h1>D A A A </h1>
                </div>
                <div class="mt-5 pt-5">
                    <?php
                    for ($i = 0; $i < strlen($_SESSION["word"]); $i++) {
                        echo "- ";
                    }
                    var_dump($_SESSION["word"]);
                    ?>
                </div>
            </div>
        </div>

        <section class="mt-5">
            <div class="row">
                <form method="post" action="./speler_1.php" class="col-12 col-md-6">
                    <?php
                    for ($i = 0; $i < count(ALPHABET); $i++) {
                        //kijk of je dit naar submit of // de alfabet letter moet zetten?
                        echo "<input type='submit' name='letter' value='" . ALPHABET[$i] . "'>";
                    }
                    ?>
                </form>
                <form method="post" class="mt-5">
                    <input class="btn btn-danger" type="submit" value="reset" name="resetBTN">
                </form>
            </div>
        </section>
    </div>
</body>

</html>