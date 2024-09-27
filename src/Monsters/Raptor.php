<?php

namespace MudMgmk\Mud\Monsters;

use Jugid\Staurie\Game\Monster;

class Raptor extends Monster {

    public function name() : string {
        return 'Raptor';
    }

    public function description(): string { 
        return 'Raptors are often in groups, but they are not very strong. Equip yourself thanks to what you have won in the last fights';
    }

    public function level() : int {
        return 1;
    }

    public function health_points(): int { 
        return 500;
    }

    public function defense(): int { 
        return 10;
    }

    public function experience(): int { 
        return 100;
    }

    public function skills(): array { 
        return [
            'Scratch' => 10,
        ];
    }
}