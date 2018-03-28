<?php
/**
 * Created by PhpStorm.
 * User: triinvaht
 * Date: 19.12.2017
 * Time: 8:44
 */
$arvud = array(5, 4, 3, 2, 1);
var_dump($arvud);
echo '<hr />';
echo '<pre>';
print_r($arvud);
echo '</pre>';
echo '<hr />';
$elementideArv = count($arvud);
echo 'Massiiv $arvud koosneb '.$elementideArv.' elemendist<br />';
$arvud[] = 0;
echo 'Massiiv $arvud koosneb '.count($arvud).' elemendist<br />';
for($i = 0; $i < count($arvud); $i++){
    echo $arvud[$i].'<br />';
}
echo '<hr />';
foreach ($arvud as $arv){
    echo '<i>'.$arv.'</i><br />';
}
echo '<hr />';
/*
 * Koosta funktsioon nimega looMassiiv,
 * mis võtab parameetrina elementide
 * arvu ja loob juhuarvudest (täisarvud)
 * vahemikust 0-99 koosneva massiivi.
 * Loodud massiiv tuleb tagastada
 * põhiprogrammile ja kontrollida sisu
 * testväljastuse abil
 * */
function looMassiiv($elementideArv){
    $massiiv = array();
    for($i = 0; $i < $elementideArv; $i++){
        $juhuarv = rand(0, 99);
        $massiiv[] = $juhuarv;
    }
    return $massiiv;
}
$arvudeMassiiv = looMassiiv(8);
echo '<pre>';
print_r($arvudeMassiiv);
echo '</pre>';
/*
 * Loo funktsioon nimega valjastaMassiiv,
 * mis võtab parameetrina massiivi ja
 * väljastab tema elemendid
 * üherealise tabeli kujul
 * Väljundi loomisel kasutada foreach
 * tsükkel
 * */
function valjastaMassiiv($massiiv){
    echo '<table border="1">';
    echo '<tr>';
    foreach ($massiiv as $element){
        echo '<td>';
        echo $element;
        echo '</td>';
    }
    echo '</tr>';
    echo '</table>';
}
valjastaMassiiv($arvudeMassiiv);
echo '<hr />';
/*
 * Muuda looMassiiv funktsiooni nii,
 * et ma võtaks parameetritena ridade ja
 * veergude arvu ja looks 2D massiivi
 * ning tagastaks põhiprogrammile
 * Funktsiooni nimeks paneme
 * loo2DMassiiv*/
function loo2DMassiiv($ridadeArv, $veergudeArv){
    $massiiv2D = array();
    for($reaNumber = 0; $reaNumber < $ridadeArv; $reaNumber++){
        $massiiv2D[] = array();
        for ($veeruNumber = 0; $veeruNumber < $veergudeArv; $veeruNumber++){
            $juhuarv = rand(0,99);
            $massiiv2D[$reaNumber][] = $juhuarv;
        }
    }
    return $massiiv2D;
}
$arvudeMassiiv2D = loo2DMassiiv(2, 3);
echo '<pre>';
print_r($arvudeMassiiv2D);
echo '</pre>';
/*
 * Loo funktsioon nimega vahetaMinMax, mis võtab
 * parameetrina täisarvude massiivi (testimises
 * võib kasutada looMassiiv funktsiooniga
 * genereeritud massiiv)
 * ja leiab kõige väiksema ja kõige suurema
 * elemendi antud massiivis ning vahetab nende asukohad.
 *
 * Kontrolli kas kohad on vahetatud kasutades
 * valjastaMassiiv funktsiooni
*/
function vahetaMinMax(&$massiiv){
    $min = min($massiiv);
    $max = max($massiiv);
    for($i = 0; $i < count($massiiv); $i++){
        if($massiiv[$i] == $min){
            $massiiv[$i] = $max;
        } else if($massiiv[$i] == $max){
            $massiiv[$i] = $min;
        }
    }
}
echo '<hr />';
vahetaMinMax($arvudeMassiiv);
valjastaMassiiv($arvudeMassiiv);
echo '<hr />';
/*
 * Katsetamiseks kasuta järmine massiiv:
 * 1, 0, 6, 0, 0, 3, 5
 * Loo funktsioon nimega elementideKorrutis, mis
 * võtab parameetrina täisarvude massiivi ja leiab
 * korrutis nendest arvudest, mis on suurem kui 0
 * ja mille indeksid on paarisarvud. Tulemus väljastatakse
 * antud funktsiooni abil kujul:
 *
 * Tulemus: 1 * 6 * 5 = 30
*/
function elementideKorrutis($massiiv){
    $tulemus = 1;
    $korrutamisMark = 0;
    echo 'Tulemus: ';
    for($i = 0; $i < count($massiiv); $i++){
        if($massiiv[$i] > 0 and $i % 2 == 0){
            $tulemus = $tulemus * $massiiv[$i];
            if($korrutamisMark != 0){
                echo ' * '.$massiiv[$i];
            } else {
                echo $massiiv[$i];
                $korrutamisMark = 1;
            }
        }
    }
    echo ' = '.$tulemus;
}
echo '<hr />';
elementideKorrutis(array(1, 0, 6, 0, 0, 3, 5, 0, 2));
echo '<hr />';