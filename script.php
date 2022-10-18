<?php

echo "TESTE";
$infofile = fopen("data.txt", "a") or die("Unable to");
    $frase = $_COOKIE["frase"];
    fwrite($infofile, $frase);
    fclose($infofile);