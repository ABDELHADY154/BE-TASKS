<?php

class Shape
{
    const SHAPE_TYPE = 1;

    public $name;
    protected $length;
    protected $width;
    private $id;

    function __construct(int $length, int $width)
    {
        $this->length = $length;
        $this->width = $width;
        $this->id = uniqid();
    }

    public function setName(string $name)
    {
        $this->name = $name;
        // return $this->name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): string
    {
        return $this->id;
    }
    public function area(): int
    {
        $area = $this->length * $this->width;
        return $area;
    }

    public static function getTypeDescription(): string
    {
        // $shapeType = 
        return static::SHAPE_TYPE;
    }
    public  function getFullDescription(): string
    {
        return 'Shape #' . $this->getId() . ': ' . $this->name . ' -' . $this->length . 'x' . $this->width;
    }
}
