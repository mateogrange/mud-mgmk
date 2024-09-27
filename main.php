<?php

use Jugid\Staurie\Component\Character\MainCharacter;
use Jugid\Staurie\Component\Character\Statistics;
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Introduction\Introduction;
use Jugid\Staurie\Component\Inventory\Inventory;
use Jugid\Staurie\Component\Level\Level;
use Jugid\Staurie\Component\Map\Map;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\Money\Money;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Staurie;
use MudMgmk\Mud\Components\Combat\Combat;

require_once __DIR__ . '/vendor/autoload.php'; //A REMPLACER

$staurie = new Staurie('My game');
$staurie->register([
  Console::class, 
  PrettyPrinter::class, 
  Inventory::class, 
  Level::class,
  Combat::class
]);

$charStats = new Statistics();
$charStats
  ->addDefault('health', default_value: 50)
  ->addDefault('attack', default_value: 0)
  ->addDefault('defense', default_value: 0)
  ->addDefault('chance', default_value: 0);

$container = $staurie->getContainer();

$character = $container->registerComponent(MainCharacter::class);
$character->configuration([
  'name'=>'Unknown',
  'gender'=>'Unknown',
  'statistics' => $charStats,
  'equipment' => [
    'head' => null,
    'hand' => null,
    'shield' => null,
    'feet' => null,
    'chest' => null,
  ]
]);

$map = $container->registerComponent(Map::class);
$map->configuration([
    'directory'=>__DIR__.'/src/Maps',
    'namespace'=>'MudMgmk\Mud\Maps', 
    'navigation'=>true,
    'map_enable'=>true,
    'compass_enable'=>true
]);

$staurie->run(); //LANCE LE JEU
