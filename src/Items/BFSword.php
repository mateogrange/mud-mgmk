<?php

namespace MudMgmk\Mud\Items;

use Jugid\Staurie\Game\Item_Equippable;

class BFSword extends Item_Equippable {

    public function name() : string {
        return 'BFSword';
    }

    public function description(): string
    {
        return 'A Big Fricking Sword';
    }

    public function body_part(): string { 
        return 'hand';
    }

    public function statistics(): array
    {
        return [
            'attack'=> 10,
            'chance'=> 1
        ];
    }
}
