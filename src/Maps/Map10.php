<?php

namespace MudMgmk\Mud\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Map10 extends Blueprint
{
    private Position $position;

    public function __construct()
    {
        $this->position = new Position(5, 2);
    }

    public function name(): string
    {
        return 'Path9';
    }

    public function description(): string
    {
        return 'This is a test map. This is a description where you can set a context element for users';
    }

    public function position(): Position
    {
        return $this->position;
    }

    public function npcs(): array
    {
        return [];
    }
    public function items(): array
    {
        return [];
    }

    public function monsters(): array
    {
        return [];
    }
}
