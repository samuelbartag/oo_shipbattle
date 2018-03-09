<?php

require_once __DIR__.'/lib/Ship.php';
require_once __DIR__.'/lib/BattleManager.php';
require_once __DIR__.'/lib/ShipLoader.php';
require_once __DIR__.'/lib/BattleResult.php';

$configuration = array(
    'db_dsn' => 'mysql:host=172.17.0.2;dbname=oo_battle',
    'db_user' => 'root',
    'db_pass' => 'passwd',
);
