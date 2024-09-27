<?php

namespace  MudMgmk\Mud\Npcs;

use Jugid\Staurie\Game\Npc;

class Brolaf extends Npc
{

  public function name(): string
  {
    return 'Brolaf';
  }

  public function description(): string
  {
    return 'A stranger who like to spin with big sword';
  }

  public function speak(): string|array
  {
    return ['You can\'t arrest me, my dad owns a dealership!
      Yo! Looking for some rocks to smash? Haha!
      There are Krugs nearby, big bags of rocks. You should go and smash them!
      Look at your compass or something... but you don\'t have to, can you smell it? That\'s the rock about to break, bro!
      Come on, bro! Knock ‘em dead, and come back for a drink afterwards!'];
  }
}
