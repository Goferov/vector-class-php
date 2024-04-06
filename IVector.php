<?php


interface IVector {
    public function abs(): float;
    public function dot(Vector $v): float;
    public function vec(Vector $v): Vector;
    public function getCoords(): array;
}