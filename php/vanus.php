<?php
/**
 * Created by PhpStorm.
 * User: triinvaht
 * Date: 16.03.2018
 * Time: 16.12
 */
$vanus = rand(0, 100);
if($vanus >= 0 and $vanus < 11){
    echo 'Oled laps, kes on '.$vanus.' aastat vana';
} elseif ($vanus > 10 and $vanus < 18){
    echo 'Oled nooruk, kes on '.$vanus.' aastat vana';
} elseif ($vanus > 17 and $vanus < 65){
    echo 'Oled täiskasvanu, kes on '.$vanus.' aastat vana';
} else{
    echo 'Oled senioor, kes on '.$vanus.' aastat vana';
}
echo '<br />';