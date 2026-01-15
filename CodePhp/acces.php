<?php

$user="maxime";
$pass="Sigrid@62570!";

try {

    $bdd = new PDO(
        'mysql:host=localhost;dbname=pjticket;charset=utf8',
        $user,
        $pass,
    );
    
}

catch(Exception $e)
{
    die('Erreur:'.$e->getMessage());
}

?>