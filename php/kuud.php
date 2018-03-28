<?php
/**
 * Created by PhpStorm.
 * User: triinvaht
 * Date: 13.12.2017
 * Time: 9:37
 *///Koosta PHP skript nimega kuud.php
//Skript peab vastavalt kuu numbrile väljastama, kas tegu on
// 1-jaanuar- näärikuu
//jne
//värskendamine peab toimuma automaatselt
//Mitte unustada ka varianti, kus vale numbri kasutamisel vastav kirjeldus ka ilmub
header('Refresh: 2');
$kuu = rand(0, 12);
if ($kuu == 1 ){
    $staatus = 'Jaanuar-näärikuu';
} elseif ($kuu == 2){
    $staatus = 'Veebruar-vastlakuu';
} elseif ($kuu == 3){
    $staatus = 'Märts-kevadkuu';
    if ($kuu == 4){
        $staatus = 'Aprill-lihavõttekuu';
        if ($kuu == 5){
            $staatus = 'Mai-esimene suvekuu';
            if ($kuu == 6){
                $staatus = 'Juuni-jaanikuu';
                if ($kuu == 7){
                    $staatus = 'kaunis kuu';
                    if ($kuu == 8){
                        $staatus = 'August-augustikuu';
                        if ($kuu == 9){
                            $staatus = 'September-sügiskuu';
                            if ($kuu == 10){
                                $staatus = 'Oktoober-sünnikuu';
                                if ($kuu == 11){
                                    $staatus = 'November-talvekuu';
                                    if ($kuu == 12){
                                        $staatus = 'Detsember-jõulukuu';
                                    } else {
                                        $staatus = 'Sellist kuud ei ole olemas';
                                    }
                                    echo 'Hetkel '.$kuu.' on.<br />'