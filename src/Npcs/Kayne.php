<?php

namespace  MudMgmk\Mud\Npcs;

use Jugid\Staurie\Game\Npc;

class Kayn extends Npc
{

  public function name(): string
  {
    return 'Kayn';
  }

  public function description(): string
  {
    return 'An unpredictable jester of chaos, Shaco thrives in the shadows, always one step ahead and laughing as he sows fear and confusion.';
  }

  public function speak(): string|array
  {
    return ['Hmph, you think you\'re ready? Not quite.
    The raptors are close, I can feel them... hungry.
    (Kayn crosses her arms, the shadow of Rhaast whispering in her mind).

    Check your compass, they move fast. But don\'t be careless... they\'re not easy prey.
    (He walks away, disappearing into the shadows).'];
  }
}
