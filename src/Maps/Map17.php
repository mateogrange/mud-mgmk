<?php

namespace MudMgmk\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use MudMgmk\Mud\Items\Demon_Sword;
use MudMgmk\Mud\Npcs\Garen;
use MudMgmk\Mud\Npcs\Ornn;
use MudMgmk\Mud\Monsters\Nashor;
use MudMgmk\Mud\Monsters\Scuttle;

class Map17 extends Blueprint
{
  private Position $position;

  public function __construct()
  {
    $this->position = new Position(7, 3);
  }

  public function name(): string
  {
    return 'path16';
  }

  public function description(): string
  {
    return 'This is a test map. This is a description where you can set a context element for users';
  }

  public function position(): Position
  {
    return $this->position;
  }

  public function npcs(): array
  {
    return [new Ornn(), new Garen()];
  }
  public function items(): array
  {
    return [new Demon_Sword()];
  }

  public function monsters(): array
  {
    return [new Scuttle()];
  }
}
