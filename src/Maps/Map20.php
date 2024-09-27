<?php

namespace MudMgmk\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use MudMgmk\Mud\Npcs\Veigar;

class Map20 extends Blueprint
{
  private Position $position;

  public function __construct()
  {
    $this->position = new Position(9, 4);
  }

  public function name(): string
  {
    return 'path19';
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
    return [new Veigar()];
  }
  public function items(): array
  {
    return [];
  }

  public function monsters(): array
  {
    return [];
  }
}
