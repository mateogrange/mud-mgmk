<?php

namespace MudMgmk\Mud\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Chainmail extends Item_Equippable {

    public function name() : string {
        return 'Chainmail';
    }

    public function description(): string
    {
        return 'A Basic Chainmail';
    }

    public function body_part(): string { 
        return 'chest';
    }

    public function statistics(): array
    {
        return [
            'defense'=> 5
        ];
    }
}
