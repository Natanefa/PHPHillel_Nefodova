<?php


class parentClass
{
    public $parentVar1 = 15;
    public $parentVar2 = 13;

    /**
     * @return int
     */
    public function getParentVar1()
    {
        return $this->parentVar1;
    }

    /**
     * @param int $parentVar1
     */
    public function setParentVar1($parentVar1)
    {
        $this->parentVar1 = $parentVar1;
    }

    /**
     * @return int
     */
    public function getParentVar2()
    {
        return $this->parentVar2;
    }

    /**
     * @param int $parentVar2
     */
    public function setParentVar2($parentVar2)
    {
        $this->parentVar2 = $parentVar2;
    }
}