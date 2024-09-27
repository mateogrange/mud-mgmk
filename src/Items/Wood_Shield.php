<?php

namespace MudMgmk\Mud\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Wood_Shield extends Item_Equippable {

    public function name() : string {
        return 'Wood Shield';
    }

    public function description(): string
    {
        return 'A Basic Wood Shield';
    }

    public function body_part(): string { 
        return 'shield';
    }

    public function statistics(): array
    {
        return [
            'defense'=> 10
        ];
    }
}
