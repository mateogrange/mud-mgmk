<?php

namespace MudMgmk\Mud\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Demonslayer extends Item_Equippable {

    public function name() : string {
        return 'Demonslayer';
    }

    public function description(): string
    {
        return 'A Fricking Demon Sword';
    }

    public function body_part(): string { 
        return 'hand';
    }

    public function statistics(): array
    {
        return [
            'chance'=> 666,
            'wisdom'=> 666
        ];
    }
}