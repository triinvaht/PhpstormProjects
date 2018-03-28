<?php
/**
 * Created by PhpStorm.
 * User: triinvaht
 * Date: 23.01.2018
 * Time: 15:27
 */
/*
 * Loo funktsioon genereeriVarv mis genereerib ja tagastab
 * põhiprogrammile genereeritud värv kujul #XXXXXX
 * Vihje: kasuta tsüklis loodud kood ja teisenda see
 * funktsiooniks
 * */
/*
 * Rakenda loodud funktsioon iga pesa värvimiseks
 * */
function genereeriVarv(){
    $varv = '#';
    for($kord = 1; $kord <= 6; $kord++){
        $juhuTaisarv = rand(0, 15);
        $juhuHex = dechex($juhuTaisarv);
        $varv = $varv.$juhuHex;
    }
    return $varv;
}
function valjastaTabel($ridadeArv, $veergudeArv){
    echo '<table border="1">';
    for($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++){
        echo '<tr>';
        for ($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++){
            echo '<td style="background-color: '.genereeriVarv().';">';
            echo rand(10, 99);
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
valjastaTabel(5, 7);
/*
 * Koosta funktsioon nimega tekstiTabel, mis võtab parameetrina
 * 4 sõna ja väljastab tabelit, mis koosneb
 * 4-st reas, iga rida sisaldab üks sõna, mis on parameetrina määratud
 *
 * Lahenduses ei tohi kasutada koodi dubleerimist! - st. ei ole võimalik
 * 4 korda kirjutada sama kood, vaid tuleb mõelda,
 * kuidas saab tsüklite ja muutujate defineerimisega lahendada antud
 * ülesanne
 * */
function tekstiTabel($sona1, $sona2, $sona3, $sona4){
    echo '<table border="1">';
    for($reaNumber = 1; $reaNumber <= 4; $reaNumber++){
        echo '<tr>';
        echo '<td>';
        echo ${'sona'.$reaNumber};
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
tekstiTabel('See', 'on', 'minu', 'tabel');