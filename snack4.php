<?php
    $randomNumbers = [];
    
    while (count($randomNumbers) < 15) {
        $numbers = rand(1, 100);

        if (!in_array($numbers, $randomNumbers)) {
            $randomNumbers[] = $numbers;
        }
    };

    for($i = 0; $i < count($randomNumbers); $i++) {
        $numbers = rand(1, 15);
        echo $numbers . " - " ;
    };


