<?php

use Jugid\Staurie\Component\Character\MainCharacter;
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Introduction\Introduction;
use Jugid\Staurie\Component\Inventory\Inventory;
use Jugid\Staurie\Component\Level\Level;
use Jugid\Staurie\Component\Map\Map;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\Money\Money;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Staurie;

require_once __DIR__ . '/vendor/autoload.php'; //A REMPLACER

$staurie = new Staurie('My game');
$staurie->register([
  Console::class, 
  PrettyPrinter::class, 
  MainCharacter::class, 
  Inventory::class, 
  Level::class
]);

$container = $staurie->getContainer();

$map = $container->registerComponent(Map::class);
$map->configuration([
    'directory'=>__DIR__.'/src/Maps',
    'namespace'=>'MudMgmk\Mud\Maps', 
    'navigation'=>true,
    'map_enable'=>true,
    'compass_enable'=>true
]);

$staurie->run(); //LANCE LE JEU
