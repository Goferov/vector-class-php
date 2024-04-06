<?php
require_once "IVector.php";
class Vector implements IVector {
    private float $x;
    private float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function abs(): float {
        return sqrt($this->x**2 + $this->y**2);
    }

    public function dot(Vector $v): float {
        $coords = $v->getCoords();
        return $this->x * $coords['x'] + $this->y * $coords['y'];
    }

    public function vec(Vector $v): Vector {
        return $v;
    }

    public function getCoords(): array {
        return [
            'x' => $this->x,
            'y' => $this->y,
        ];
    }
}