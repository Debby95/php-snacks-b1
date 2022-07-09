<?php
    $randomNumbers = [];
    
    while (count($randomNumbers) < 15) {
        $numbers = rand(1, 50);

        if (!in_array($numbers, $randomNumbers)) {
            $randomNumbers[] = $numbers;
        }

        echo $numbers . "  " ;
    }


