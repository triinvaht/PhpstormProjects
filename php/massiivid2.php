<?php
/**
 * Created by PhpStorm.
 * User: triinvaht
 * Date: 9.01.2018
 * Time: 11:41
 */

$opilane = array(
    'eesnimi' => 'Mart',
    'perenimi' => 'Lepp',
    'vanus' => 15,
    'klass' => 9
);
echo '<pre>';
print_r($opilane);
echo '</pre>';
echo $opilane['eesnimi'];
echo '<hr />';
foreach ($opilane as $voti=>$vaartus){
    echo $voti.' - '.$vaartus.'<br />';
}
echo '<hr />';
$opilased = array(
    array(
        'eesnimi' => 'Mart',
        'perenimi' => 'Lepp',
        'vanus' => 15,
        'klass' => 9
    ),
    array(
        'eesnimi' => 'Kadri',
        'perenimi' => 'Tamm',
        'vanus' => 16,
        'klass' => 10
    ),
    array(
        'eesnimi' => 'Kadi',
        'perenimi' => 'Kuusk',
        'vanus' => 15,
        'klass' => 9
    )
);
echo '<pre>';
print_r($opilased);
echo '</pre>';
foreach ($opilased as $opilane){
    foreach ($opilane as $element=>$vaartus){
        echo $element.' - '.$vaartus.'<br />';
    }
    echo '--------------'.'<br />';
}
//
//
/*
 * Katsetamiseks raamatud kirjeldav massiiv kujul:
 * array(
 *      array(
 *          'title' => 'raamat',
 *          'author' => 'autor',
 *          'print' => 'trükikoda',
 *          'status' => 'seisund'
 *      )
 * );
 * Loo funktsioon nimega otsiRaamat, mille parameetrina on raamatute
 * massiiv ja seisund, funktsioon tagastab massiivi,
 * kus on raamatud vastava seisundiga (seisund tähendab,
 * kas raamat on välja antud või mitte).
 * Loo funktsioon nimega raamatuteTabel, mis võtab parameetrina massiivi, ja
 * väljastab tulemused tabeli kujul. Tabeli pealkirjaks
 * on massiivi võtmed (pealkirja loomiseks võib kasutada eraldi funktsiooni)
 * */
$raamatud = array(
    array(
        'title' => 'Peppa Goes To London',
        'author' => 'Ladybird',
        'print' => 'Penguin',
        'status' => 'valjas'
    ),
    array(
        'title' => 'Toto, Joonas ja püha Mimoos',
        'author' => 'Kristiina K.',
        'print' => 'Heli Kirjastus OÜ',
        'status' => 'sees'
    ),
    array(
        'title' => 'Lugusid loomadest',
        'author' => 'Ernest Thompson Seton',
        'print' => 'Ernest Thompson Seton',
        'status' => 'sees'
    ),
    array(
        'title' => 'Miljon miksi ja miljon vastust',
        'author' => '',
        'print' => 'TEA Kirjastus',
        'status' => 'sees'
    ),
    array(
        'title' => 'Teadmiste Puu: Maailma Loodus',
        'author' => 'AJ Wood, Mike Jolley',
        'print' => 'Pikoprint',
        'status' => 'valjas'
    )
);
$kohalRaamatud = otsiRaamat($raamatud, 'sees');
raamatuteTabel($kohalRaamatud);
raamatuteTabel($raamatud);