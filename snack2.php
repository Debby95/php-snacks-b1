<?php
    $name = key_exists("name", $_GET) ? $_GET["name"]: "";
    $email = key_exists("email", $_GET) ? $_GET["email"]: "";
    $age = key_exists("age", $_GET) ? $_GET["age"]: "";


    $accessAllowed = false;
    $posPt = strpos($email, ".");
    $posChiocciola = strpos($email, "@");

    if (strlen($name) > 3) {
        $accessAllowed = true;
    };

    if ($posPt || $posChiocciola) {
        $accessAllowed = true;
    };

    if (is_numeric($age)) {
        $accessAllowed = true;
    };

    if ($accessAllowed === true) {
        echo "Access allowed" . " " . $name . " " . $email . " " . $age;
    } else {
        echo "Access denied" . " " . $name . " " . $email . " " . $age;
    };
    

    var_dump($accessAllowed);