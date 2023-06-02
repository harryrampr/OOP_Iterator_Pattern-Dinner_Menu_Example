<?php
declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use App\CafeMenu;
use App\DinerMenu;
use App\PancakeHouseMenu;
use App\Waitress;

$pancakeHouseMenu = new PancakeHouseMenu();
$dinerMenu = new DinerMenu();
$cafeMenu = new CafeMenu();

$waitress = new Waitress($pancakeHouseMenu, $dinerMenu, $cafeMenu);

$waitress->printMenu();