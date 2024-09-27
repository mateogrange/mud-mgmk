<?php

namespace MudMgmk\Mud\Monsters;

use Jugid\Staurie\Game\Monster;

class Scuttle extends Monster {

    public function name() : string {
        return 'Scuttle';
    }

    public function description(): string { 
        return 'This is the worst ennemy here, but be careful to Neeko';
    }

    public function level() : int {
        return 1;
    }

    public function health_points(): int { 
        return 10;
    }

    public function defense(): int { 
        return 0;
    }

    public function experience(): int { 
        return 50;
    }

    public function skills(): array { 
        return [
            'Arghhh' => 1,
        ];
    }
}