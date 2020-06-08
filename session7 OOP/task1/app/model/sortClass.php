<?php

class SortArr
{
    private array $arr;

    public function setArr(array $arr)
    {
        $this->arr = $arr;
        return $this;
    }

    public function getSortedArr()
    {

        $array = $this->arr;
        sort($array);
        return ($array);
    }
}
