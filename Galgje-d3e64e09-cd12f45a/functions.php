<?php

function GameReset()
{
    if (isset($_POST['resetBTN'])) {
        header('Location: index.php');
        session_destroy();
    }
}

function WordGenerator()
{
    
    $Words = [
        "absurd",
        "bandwagon",
        "crypt",
        "dizzying",
        "euouae",
        "fishhook",
        "foxglove",
        "galaxy",
        "haphazard",
        "iatrogenic",
        "jiujitsu",
        "keyhole",
        "lymph",
        "mnemonic",
        "nymph",
        "oxidize",
        "phlegm",
        "razzmatazz",
        "stymied",
        "xylophone"
    ];

    $Randomizer = array_rand($Words); 
    $RandomChoice = $Words[$Randomizer];
    return $RandomChoice;
}

function WordPlayer2()
{
    if (isset($_POST['word'])) {
        $_SESSION["word"] = $_POST["word"];
        header('Location: Speler_1.php');
    }
}

const ALPHABET = [
    "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
];


