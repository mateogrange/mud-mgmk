<?php

namespace  MudMgmk\Mud\Npcs;

use Jugid\Staurie\Game\Npc;

class Warwick extends Npc
{

  public function name(): string
  {
    return 'Warwick';
  }

  public function description(): string
  {
    return 'Bloodthirsty and relentless, Warwick is a predator driven by rage and instinct.';
  }

  public function speak(): string|array
  {
    return ['Sniff... sniff...
      I can smell them. The wolves. They\'re close...
      (He growls, his claws ready to pounce.)

      Do you think you can handle them? They\'re hungry, like me.
      Your compass will show you... but that\'s not going to save you. It\'s your instinct... or your fear.'];
  }
}
