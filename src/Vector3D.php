<?php

class Vector3D {

    private float $z;
    public function __construct(float $x, float $y, float $z) {
        parent::__contruct($x, $y);
        $this->z = $z;
    }

    public function abs(): float {
        return 1;
    }

    public function dot(Vector $v): float {
        $coords = $v->getCoords();
        return $this->x * $coords['x'] + $this->y * $coords['y'] + $this->z * $coords['z'];
    }

    public function vec(Vector $v): Vector {
        return $v;
    }

    public function getCoords(): array {
        return [
            'x' => $this->x,
            'y' => $this->y,
            'z' => $this->z,
        ];
    }
}