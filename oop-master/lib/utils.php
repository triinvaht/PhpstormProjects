<?php
/**
 * Created by PhpStorm.
 * User: triinvaht
 * Date: 24.01.2018
 * Time: 10:13
 */
function fixUrl($str){
    return urlencode($str);
}

function fixDB($str){
    return '"'.addslashes($str).'"';
}