<?php
/**
 * Created by PhpStorm.
 * User: triinvaht
 * Date: 10.01.2018
 * Time: 14:21
 */
function Vorm(){
    $katseteArv = $_POST['katseteArv'];
    $katseteArv = isset($katseteArv) ? ++$katseteArv : 0;
    echo '
        <form action="salvestus.php" method="post">
            Eesnimi: <input type="text" name="Eesnimi">
            <br />
            Perenimi: <input type="text" name="Perenimi">
            <br />
            <input type="submit" value="Salvesta">
        </form>
    ';
}

Vorm();