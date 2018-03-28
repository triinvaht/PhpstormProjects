<?php
/**
 * Created by PhpStorm.
 * User: triinvaht
 * Date: 15.12.2017
 * Time: 11:09
 */
header('Refresh: 0.2');
for($rida = 1; $rida <=5; $rida++){
    $varv = '#';
    for($kord = 1; $kord <= 6; $kord++){
        $juhuTaisarv = rand(0,15);
        $juhuflex = dechex($juhuTaisarv);
        $varv = $varv.$juhuflex;
    }
    echo '<font color="' .$varv. '"> Värviline tekst</font><br />';
}
