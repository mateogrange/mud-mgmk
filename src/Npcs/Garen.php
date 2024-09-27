<?php

namespace  MudMgmk\Mud\Npcs;

use Jugid\Staurie\Game\Npc;
use MudMgmk\Mud\Items\Wood_Shield;

class Garen extends Npc
{

  public function name(): string
  {
    return 'Garen';
  }

  public function description(): string
  {
    return 'A stranger who like to spin with big sword';
  }

  public function speak(): string|array
  {
    if (true) {
      $this->giveItem(new Wood_Shield());
      return ['For Demacia'];
    }
  }
}
