<?php

namespace MudMgmk\Mud\Monsters;

use Jugid\Staurie\Game\Monster;

class Wolf extends Monster {

    public function name() : string {
        return 'Wolf';
    }

    public function description(): string { 
        return 'The Wolfs do not have much life, but ther are very dangerous. Do not hesitate to stand up for yourself';
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
            'Bite' => 10,
        ];
    }
}