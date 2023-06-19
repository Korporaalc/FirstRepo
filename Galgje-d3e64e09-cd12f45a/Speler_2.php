<?php
session_start();
include("functions.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    WordPlayer2();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Galgje 2 Spelers</title>
    <style>
        body {
            background-color: beige;
        }
    </style>
</head>

<body>
    <header class="column d-flex justify-content-around text-center">
        <h1>2 Spelers</h1>
    </header>
    <div class="text-center">
        <h2>Vul hier een woord in</h2>
    </div>
    <form method="post" class="text-center" action="./Speler_2.php">
        <input type="password" name="word" id="word">
        <input type="submit" value="Submit">
    </form>
</body>

</html>