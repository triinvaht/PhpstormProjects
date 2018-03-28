<?php
/**
 * Created by PhpStorm.
 * User: triinvaht
 * Date: 17.03.2018
 * Time: 12:27
 */

date_default_timezone_set('Europe/Tallinn');
$aegHetkel = time();
$kellaaeg = date('G:i', $aegHetkel);
echo $kellaaeg.'<br />';
$kuupaev = date('j.m.Y');
echo $kuupaev.'<br />';

/*
 * Loo funktsioon nimega vorm, mis väljastab vormi
 * Vormi kaudu kasutajal on võimalus sisestada
 * oma eesnimi, perenimi, sünnikuupäev -
 * selle sisestamiseks valmista eraldi input elemendid
 * päeva, kuu ja aasta jaoks
 * Lisaks olemas nupp, mis need andmed saadab serverile
 *
 * Loo funktsioon nimega ajaTootlus, mis
 * võtab parameetritena kasutaja sünni, päeva, kuu ja
 * aasta ja loob nende põhjal andmebaasi DATE formaadiks
 * sobilik väärtus
 *
 * Kontrollimiseks väljasta saadud väärtus
 * */

function vorm(){
    echo '
        <form action="'.$_SERVER['PHP_SELF'].'" method="post">
            Eesnimi: <input type="text" name="eesnimi">
            <br />
            Perenimi: <input type="text" name="perenimi">
            <br />
            Päev: <input type="text" name="paev">
            <br />
            Kuu: <input type="text" name="kuu">
            <br />
            Aasta: <input type="text" name="aasta">
            <br />
            <input type="submit" value="saada">
        </form>
    ';

}
function andmeteKontroll()
{
    $kontroll = false;
    if (!empty($_POST)) {
        foreach ($_POST as $voti => $vaartus) {
            if (empty($_POST[$voti])) {
                echo 'Andmed peavad olema sisestatud!<br />';
                exit;
            }
        }
        $kontroll =  true;
    }
    return $kontroll;
}
function ajaTootlus($paev, $kuu, $aasta){
    if(andmeteKontroll()){
        $aegUnixTimestamp = mktime(0, 0, 0, $kuu, $paev, $aasta);
        $aeg = date('Y-m-d', $aegUnixTimestamp);
    }
    return $aeg;
}
vorm();
if(andmeteKontroll()){
    echo $_POST['eesnimi'].' '.$_POST['perenimi'].
        ', sinu sünnikuupäev on '.ajaTootlus($_POST['paev'], $_POST['kuu'], $_POST['aasta']);
}



