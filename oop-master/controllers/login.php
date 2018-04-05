<?php
/**
 * Created by PhpStorm.
 * User: triinvaht
 * Date: 12/02/2018
 * Time: 11:15
 */
//võtame kasutusele login.html andmed
$loginForm = new template(file:'login');
//kasutaja andmete töötlusfaili link
$link = $http->getLink(array('control'=>'login_do'));
//lisame vajalikud andmed fiali
$loginForm->set('link', $link);
$loginForm->set('kasutaja', 'Sisesta kasutaja');
$loginForm->set('parool', 'Sisesta parool');
$loginForm->set('nupp', ' Logi sisse');
//nüüd tuleb see sisu väljastada pemalli sees
$mainTmpl->set('content', $loginForm->parse());