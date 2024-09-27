<?php

namespace MudMgmk\Mud\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Helmet extends Item_Equippable {

    public function name() : string {
        return 'Helmet';
    }

    public function description(): string
    {
        return 'A Basic Helmet';
    }

    public function body_part(): string { 
        return 'head';
    }

    public function statistics(): array
    {
        return [
            'defense'=> 3,
            'chance'=> 1
        ];
    }
}
