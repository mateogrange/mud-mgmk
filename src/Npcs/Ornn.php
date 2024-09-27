<?php

namespace  MudMgmk\Mud\Npcs;

use Jugid\Staurie\Game\Npc;
use MudMgmk\Mud\Items\BFSword;

class Ornn extends Npc
{

  public function name(): string
  {
    return 'Ornn';
  }

  public function description(): string
  {
    return 'An ancient blacksmith with a temper as strong as his forge, crafting only for those worthy.';
  }

  public function speak(): string|array
  {
    if ($this->playerHasItem('')) {
      return ['Please, do not hurt me !', 'I\'m famous here, I can help you !'];
    } else {
      $this->giveItem(new BFSword());
      return ['Hmpf. Another adventurer...Right, then. If you\'re going to fight, you\'re going to need this.
      (Ornn quickly forges a sword, holding it out to you).
      Take this sword. Go and cut your teeth on three Scuttles in the river. It\'s a good start for someone at your level.
      Don\'t dawdle. If you come back alive, we\'ll see about something else.'];
    }
  }
}
