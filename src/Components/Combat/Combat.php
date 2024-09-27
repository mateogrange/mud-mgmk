<?php

// namespace MudMgmk\Mud\Component\Combat;

// use Jugid\Staurie\Component\AbstractComponent;
// use jugid\Staurie\Game\Monster;

// class Combat extends AbstractComponent {
//   public $attack;
//   public $defense;


//   public function getEventName(): array {
//     return[];
//   }

//   protected function action(string $event, array $arguments): void {
//     $pp = $this->container->getPrettyPrinter();
    
//     switch($event) {
//       case 'character.fight':
//           $this->fight($arguments['monster']);
//           break;
//       default:
//           $this->eventToAction($event);
//           break;
//   }
//   }

//   public function name(): string {
//     return 'fight';
//   }

//   private function fight(string $monster_name) {
//     $pp = $this->container->getPrettyPrinter();
//     $monster = $this->container->getMap()->getCurrentBlueprint()->getMonster($monster_name);

//     if(null !== $monster && $monster instanceof Monster) {
//       $dialog = $monster->speak();
//       $this->printNpcDialog($npc_name, $dialog);
//     } else {
//         $pp->writeLn('You are probably talking to a ghost', 'red');
//     }
//   }

//   public function defaultConfiguration(): array { }
//   public function initialize(): void { }
//   final public function require() : array { }
// }

namespace MudMgmk\Mud\Components\Combat;

use MudMgmk\Mud\Components\Combat\Functions\FightFunction;
use Jugid\Staurie\Component\AbstractComponent;
use Jugid\Staurie\Component\Character\MainCharacter;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Game\Monster;
use Jugid\Staurie\Component\Map;

class Combat extends AbstractComponent {
  public function getEventName(): array {
      return ["combat.begin"];
  }
  protected function action(string $event, array $arguments): void {
    switch ($event) {
      case "combat.begin":
        $this->begin($arguments['monster']);
        break;
    }
  }
  private function begin(string $monsterName): void
  {
    $pp = $this->container->getPrettyPrinter();
    $character = $this->container->getCharacter();

    $map = $this->container->getMap();
    $current_blueprint = $map->getCurrentBlueprint();

    $monster = $this->getMonster($monsterName);

    if(null !== $monster && $monster instanceof Monster) {
      $monster_health = $monster->health_points();
      $monster_attack = $monster->skills();
      $monster_defense = $monster->defense();
      $character_health = $character->statistics->value('health');
      $character_attack = $character->statistics->value('attack');
      $character_defense = $character->statistics->value('defense');
      // $this->startBattle($monster_health, $monster_attack, $monster_defense, $character_health, $character_attack);
    } else {
      $pp->writeLn('You are probably trying to fight a ghost', 'red');
    }
  }
  public function name(): string {
    return "combat";
  }
  public function defaultConfiguration(): array {
    return [];
  }
  public function initialize(): void {
    $console = $this->container->getConsole();
    $console->addFunction(new FightFunction());
  }
  final public function require() : array {
    return [PrettyPrinter::class, MainCharacter::class];
  }

  public function getMonster(string $monster_name) : ?Monster{
    if(!$this->hasMonster($monster_name)) {
      return null;
    }
    
    $monsters = $this->container->getMap()->getCurrentBlueprint()->getMonsters();
    $enemy = null;
    foreach($monsters as $monster) {
      if(!$monster instanceof Monster) {
        continue;
      }
      if ($monster->name() === $monster_name) {
        $enemy = [
          'name' => $monster->name(),
          'description' => $monster->description(),
          'level' => $monster->level(),
          'health' => $monster->health_points(),
          'skills' => $monster->skills(),
          'defense' => $monster->defense()
        ];
        break;
      }
    }
    return $enemy;
  }

  private function hasMonster(string $monster_name) : bool {
    $monsters = $this->container->getMap()->getCurrentBlueprint()->getMonsters();
    return isset($monsters[$monster_name]);
  }
}
