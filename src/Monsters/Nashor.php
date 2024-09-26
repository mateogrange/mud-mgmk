<?php

namespace MudMgmk\Mud\Monsters;

use Jugid\Staurie\Game\Monster;

class Nashor extends Monster {

    public function name() : string {
        return 'Nashor';
    }

    public function description(): string { 
        return 'THIS IS THE MOST DANGEROUS MONSTER YOU CAN FIND HERE .. YOU MUST RUN !';
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
            'Decapitation' => 50,
        ];
    }
}