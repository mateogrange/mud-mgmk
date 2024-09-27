<?php

namespace MudMgmk\Mud\Monsters;

use Jugid\Staurie\Game\Monster;

class Krug extends Monster {

    public function name() : string {
        return 'Krug';
    }

    public function description(): string { 
        return 'The Krugs are few in number but they are very resistant, equip yourself with the last resources you have collected';
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
            'Crushing' => 10,
        ];
    }
}