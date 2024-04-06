<?php

class Vector3D {

    private float $z;
    public function __construct(float $x, float $y, float $z) {
        parent::__contruct($x, $y);
        $this->z = $z;
    }

    public function abs(): float {
        return sqrt($this->x**2 + $this->y**2 + $this->z**2);
    }

    public function dot(Vector $v): float {
        $coords = $v->getCoords();
        return $this->x * $coords['x'] + $this->y * $coords['y'] + $this->z * $coords['z'];
    }

    public function vec(IVector $v): IVector {
        $b = $v->getCoords();

        $c1 = $this->y*$b['z'] - $this->z*$b['y'];
        $c2 = $this->z*$b['x'] - $this->x*$b['z'];
        $c3 = $this->x*$b['y'] - $this->y*$b['x'];

        return new Vector3D([$c1, $c2, $c3]);
    }

    public function getCoords(): array {
        return [
            'x' => $this->x,
            'y' => $this->y,
            'z' => $this->z,
        ];
    }
}