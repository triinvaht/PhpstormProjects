<?php
/**
 * Created by PhpStorm.
 * User: triinvaht
 * Date: 18.12.2017
 * Time: 14:11
 */
/*
 * 1. Koostada funktsioon nimega arvuSumma, mis võtab
 * parameetrina suvalise numbri ja arvutab numbri
 * arvude summat - juhul, kui on argumendina
 * funktsioonile antud number 123, siis programm
 * peab leidma 1+2+3 summa, ehk 6.
 * Lahendamiseks ei tohi kasutada sõnetöötluse võimalused.
 * Funktsioon peab tagastama leitud summa põhiprogrammile.
 * Põhiprogrammis kasutada väljatrükis tagastatud väärtus koos
 * selgitava tekstiga
 * */
function arvuSumma($number){
    $summa = 0;
    while($number != 0){
        $arv = $number % 10;
        $summa = $summa + $arv;
        $number = $number / 10;
        settype($number, 'integer');
    }
    return $summa;
}
for ($kord = 1; $kord <= 5; $kord++){
    $number = rand(0, 1000);
    echo 'Numbri '.$number.' arvude summa on '.arvuSumma($number).'<br />';
}
/*
 * 2. Koostada funktsioon nimega otsiNumber,
 * mis võtab parameetrina suvalise arvu ja
 * kindlaks määratud arvu ja arvutab mitu korda määratud
 * arv esineb suvalises numbris, näiteks arv 5
 * esineb numbris 442158755745 neli korda.
 * Lahendamiseks ei tohi kasutada sõnetöötluse võimalused
 *
 * Funktsioon peab väljastama tulemus koos seletava tekstiga
*/
function otsiNumber($suvalineArv, $kindelArv){
    echo 'Arv '.$kindelArv.' esineb arvus '.$suvalineArv;
    $mituKorda = 0;
    while($suvalineArv != 0){
        $arv = $suvalineArv % 10;
        if($arv == $kindelArv){
            $mituKorda++;
        }
        $suvalineArv = $suvalineArv / 10;
        settype($suvalineArv, 'integer');
    }
    echo ' '.$mituKorda.' arv korda<br />';
}
otsiNumber(442158755745, 5);
otsiNumber(442158755745, 4);
otsiNumber(442158755745, 7);
otsiNumber(442158755745, 8);