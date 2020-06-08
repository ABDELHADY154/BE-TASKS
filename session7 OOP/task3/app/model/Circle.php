<?php

class Circle extends Shape
{
    const SHAPE_TYPE = 3;

    protected $radius;
    function __construct(int $radius)
    {
        $this->radius = $radius;
        Shape::__construct($radius, $radius);
    }

    public function area(): int
    {
        $area = 3.14 * ($this->length * $this->width);
        return $area;
    }
    public  function getFullDescription(): string
    {
        return 'Circle: #' . $this->getId() . ': ' . $this->name . ' -' . $this->radius;
    }
}
