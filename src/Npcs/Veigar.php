<?php

namespace  MudMgmk\Mud\Npcs;

use Jugid\Staurie\Game\Npc;

class Veigar extends Npc
{

  public function name(): string
  {
    return 'Veigar';
  }

  public function description(): string
  {
    return 'A dark sorcerer with a penchant for chaos, Veigar seeks to prove that even the smallest can wield great might.';
  }

  public function speak(): string|array
  {
    return ['Ah, an intruder in my kingdom!
      But wait... I feel a power... it\'s Nashor!
      He\'s lurking about, ready to devour anything that moves. Check your map and get ready to face him,
      you little creature!
      I can see the fear in your heart.'];
  }
}
