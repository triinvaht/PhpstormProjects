<?php
/**
 * Created by PhpStorm.
 * User: triinvaht
 * Date: 20.01.2018
 * Time: 11:38
 */
// loome vajalikud abikonstandid
// konfiguratsiooni file

define('MODEL_DIR', 'model/');
define('VIEWS_DIR', 'views/');
define('CONTROL_DIR', 'controllers/');
define('LIB_DIR', 'lib/');

// lisame vaikimisi kontrolleri faili nimi
define('DEFAULT_CONTROL', 'default');

// nõuame abifuntksioonide olemasolu
require_once LIB_DIR.'utils.php';

//lisame rakendusel kasutavad kasutajate rollid
define('ROLE_NONE', 0);
define('ROLE_USER', 1);
define('ROLE_ADMIN', 2);


// nõuame vajalikke failide olemasolu
require_once MODEL_DIR.'template.php'; // html vaade failide töötlus
require_once MODEL_DIR.'http.php'; // HTTP töötlus klass
require_once MODEL_DIR.'linkobjekt.php'; // Lingi töötluse klass
require_once MODEL_DIR.'mysql.php'; // DB töötlus klass
// nõuame vajalikke konfiguratsioonide olemasolu
require_once 'db_conf.php';
// loome vajalikud objektid, mis on pidevalt tööl
$http = new linkobject(); // http ja lingi objekt
// andmebaasi objekt
$db = new mysql(DB_HOST, DB_USER, DB_PASS, DB_NAME);