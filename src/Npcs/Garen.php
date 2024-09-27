<?php

namespace  MudMgmk\Mud\Npcs;

use Jugid\Staurie\Game\Npc;

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
    if ($this->playerHasItem('')) {
      return ['Please, do not hurt me !', 'I\'m famous here, I can help you !'];
    } else {
      // $this->giveItem(new Shield());
      return 'For Demacia';
    }
  }
}
