<?php

namespace MudMgmk\Mud\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Boots extends Item_Equippable {

    public function name() : string {
        return 'Boots';
    }

    public function description(): string
    {
        return 'A Basic Pair of Boots';
    }

    public function body_part(): string { 
        return 'feet';
    }

    public function statistics(): array
    {
        return [
            'defense'=> 2,
            'chance'=> 1
        ];
    }
}