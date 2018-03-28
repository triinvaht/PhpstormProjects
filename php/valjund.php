<?php
/**
 * Created by PhpStorm.
 * User: triinvaht
 * Date: 16.03.2018
 * Time: 16.27
 */
function loeFailist($failinimi)
{
    if (file_exists($failinimi) and is_file($failinimi) and is_readable($failinimi)) {
        echo 'Loeme andmed failist<br />';
        $fail = fopen($failinimi, 'r');
        while(!feof($fail)){
            $rida = fgets($fail);
            echo $rida.'<br />';
        }
        echo '<a href="sisend.php">Lisa andmed juurde</a>';
        fclose($fail);
    } else {
        echo 'Probleem ' . $failinimi . ' failiga<br />';
    }
}
loeFailist('andmed.txt');