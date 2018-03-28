<?php
/**
 * Created by PhpStorm.
 * User: triinvaht
 * Date: 28/03/2018
 * Time: 14:12
 */
function yhendus(){


    $yhendus = mysqli_connect('localhost','user','pass', 'andmebaas');



    if (!$yhendus){
        echo 'Probleem andmebaasi ühendamisega<br />';
        echo mysqli_connect_error().'<br />';
        echo mysqli_connect_errno().'<br />';
    } else {
        echo 'Ühendus andmebaasiga on tekkinud<br />';
    }
    return $yhendus;
}

function sisesta($eesnimi, $perenimi, $synnikuupaev, $yhendus){
    $sql = 'INSERT INTO Kasutaja(eesnimi, perenimi, synnikuupaev) '.
        'VALUES(\''.$eesnimi.'\', \''.$perenimi.'\', \''.$synnikuupaev.'\')';
    $tulemus = mysqli_query($yhendus, $sql);
    if(!$tulemus){
        echo 'Probleem andmete salvestamisega<br />';
        echo mysqli_error($yhendus).'<br />';
        echo mysqli_errno($yhendus).'<br />';
    } else {
        echo 'Andmed on salvestatud';
    }
}
function loe($yhendus){
    $andmed = array();
    $sql = 'SELECT * FROM Kasutaja';
    $tulemus = mysqli_query($yhendus, $sql);
    if(!$tulemus){
        echo 'Probleem andmete salvestamisega<br />';
        echo mysqli_error($yhendus).'<br />';
        echo mysqli_errno($yhendus).'<br />';
    } else {
        while($rida = mysqli_fetch_assoc($tulemus)){
            $andmed[] = $rida;
        }
    }
    return $andmed;
}
function tabel($andmed){
    echo '<table border="1">';
    foreach ($andmed as $inimene){
        echo '<tr>';
        foreach ($inimene as $info) {
            echo '<td>'.$info.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
include 'ajatootlus.php';
$yhendus = yhendus();
$eesnimi = $_POST['eesnimi'];
$perenimi = $_POST['perenimi'];
$synnikuupaev = ajaTootlus($_POST['paev'], $_POST['kuu'], $_POST['aasta']);
sisesta($eesnimi, $perenimi, $synnikuupaev, $yhendus);
$andmed = loe($yhendus);
tabel($andmed);
