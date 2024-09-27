<?php

namespace  MudMgmk\Mud\Npcs;

use Jugid\Staurie\Game\Npc;

class Shaco extends Npc
{

  public function name(): string
  {
    return 'Shaco';
  }

  public function description(): string
  {
    return 'An unpredictable jester of chaos, Shaco thrives in the shadows, always one step ahead and laughing as he sows fear and confusion.';
  }

  public function speak(): string|array
  {
    return ['Hehehe... Can you smell that?
      There\'s a scuttle lurking nearby...
      (Shaco disappears and suddenly reappears behind the you).
      Oh, don\'t worry, he\'s not as clever as me. But you\'d better take a look at your compass...
      It might lead you right to him. Hehehe...'];
  }
}
