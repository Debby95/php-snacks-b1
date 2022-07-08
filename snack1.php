<?php
$basketMatch = [
    [
        "homeTeam" => "Olimpia Milano",
        "awayTeam" => "Virtus Bologna",
        "homeTeamPt" => "55",
        "awayTeamPt" => "60",
    ],
    [
        "homeTeam" => "Derthona",
        "awayTeam" => "Verona",
        "homeTeamPt" => "60",
        "awayTeamPt" => "35",
    ],
    [
        "homeTeam" => "Fortitudo",
        "awayTeam" => "Cantù",
        "homeTeamPt" => "58",
        "awayTeamPt" => "46",
    ],
    [
        "homeTeam" => "New Basket Brindisi",
        "awayTeam" => "Rinascita Basket Rimini",
        "homeTeamPt" => "35",
        "awayTeamPt" => "24",
    ],
    [
        "homeTeam" => "Los Angeles Lakers",
        "awayTeam" => "Golden State Warriors",
        "homeTeamPt" => "32",
        "awayTeamPt" => "47",
    ],
    [
        "homeTeam" => "Chicago Bulls",
        "awayTeam" => "New York Knicks",
        "homeTeamPt" => "62",
        "awayTeamPt" => "28",
    ],
];

    echo "<h2></h2>"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php 
                for ($i = 0; $i < count($basketMatch); $i++) {
                    $currentSquad = $basketMatch[$i];
                    
                ?>
                <div><?php echo $currentSquad["homeTeam"] . " - " . $currentSquad["awayTeam"] . " " .  $currentSquad["homeTeamPt"] . " " . "|" .  " " . $currentSquad["awayTeamPt"] ?></div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>