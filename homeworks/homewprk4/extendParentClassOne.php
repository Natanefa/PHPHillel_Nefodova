<?php

require_once('parentClass.php');

class extendParentClassOne extends parentClass
{
    public $extendVar3 = 48;

    function sumValues()
    {
        $s1 = 87;
        $s2 = $this->getParentVar1();
        $s3 = $this->getParentVar2();
        $sum = $s1 + ($s2 + $s3);
        echo $sum;
    }

    /**
     * @return int
     */
    public function getExtendVar3()
    {
        return $this->extendVar3;
    }

    /**
     * @param int $extendVar3
     */
    public function setExtendVar3($extendVar3)
    {
        $this->extendVar3 = $extendVar3;
    }
}

class childExtendClassOne extends extendParentClassOne
{
    public $childVar1 = 44;

    function multiChildExtendVar()
    {
        $multy1 = ($this->getExtendVar3()) * $this->childVar1;
        echo $multy1, "\n";
    }

    function multiParentChildVar()
    {
        $multi2 = $this->childVar1 * ($this->getParentVar2()) * ($this->getParentVar1());
        echo $multi2, "\n";
    }


    /**
     * @return int
     */
    public function getExtendVar3(): int
    {
        return $this->extendVar3;
    }

    /**
     * @param int $extendVar3
     */
    public function setExtendVar3(int $extendVar3)
    {
        $this->extendVar3 = $extendVar3;
    }
}

class childExtendParentClassTwo extends extendParentClassOne
{
    public $childVar2 = 118;

    function divChildExtendVar()
    {
        $div1 = $this->getExtendVar3() / $this->childVar2;
        echo $div1, "\n";
    }

    function divParentChildVar()
    {
        $div2 = (($this->getParentVar2()) + ($this->getParentVar1())) / $this->childVar2;
        echo $div2, "\n";
    }

    /**
     * @return int
     */
    public function getChildVar2(): int
    {
        return $this->childVar2;
    }

    /**
     * @param int $childVar2
     */
    public function setChildVar2(int $childVar2)
    {
        $this->childVar2 = $childVar2;
    }

}

abstract class extendParentClassTwo extends parentClass
{
    public $extendVar2 = 78;

    function difValues()
    {
        $d1 = 101;
        $difRes = ($this->getParentVar2()) - $d1 - ($this->getParentVar1());
        echo $difRes, "\n";
    }

    /**
     * @param int $base
     * @param int $exp
     */
    public function powInt(int $base, int $exp)
    {
        $res = pow($base, $exp);
        echo $res, "\n";
    }

    /**
     * @return int
     */
    public function getExtendVar2()
    {
        return $this->extendVar2;
    }

    /**
     * @param int $extendVar2
     */
    public function setExtendVar2($extendVar2)
    {
        $this->extendVar2 = $extendVar2;
    }

}

abstract class childExtendParentClassThree extends extendParentClassTwo
{
    public $childVar3 = 444;

    function sqrtChildExtendVar()
    {
        $sqrtVar1 = sqrt(($this->extendVar2) * $this->getChildVar3());
        echo $sqrtVar1;
    }

    function sqrtChildParentVar()
    {
        $sqrtVar2 = sqrt(((($this->getParentVar1()) + ($this->getParentVar2()))) * $this->childVar3);
        echo $sqrtVar2;
    }

    /**
     * @return int
     */
    public function getChildVar3(): int
    {
        return $this->childVar3;
    }

    /**
     * @param int $childVar3
     */
    public function setChildVar3(int $childVar3)
    {
        $this->childVar3 = $childVar3;
    }
}

abstract class childExtendParentClassFour extends extendParentClassTwo
{
    protected $childVar4 = 789;

    public function substrChildExtendVar()
    {
        $substr1 = $this->getExtendVar2() - $this->childVar4;
        echo $substr1;
    }

    public function substrParentChildVar()
    {
        $substr2 = $this->getParentVar2() - $this->getParentVar1() - $this->childVar4;
        echo $substr2;
    }


    /**
     * @return int
     */
    public function getChildVar4(): int
    {
        return $this->childVar4;
    }

    /**
     * @param int $childVar4
     */
    public function setChildVar4(int $childVar4)
    {
        $this->childVar4 = $childVar4;
    }
}

final class extendParentClass3 extends parentClass
{
    public $extendVar3 = 77;

    function divVar()
    {
        $d3 = 33;
        $div = intdiv(($this->getParentVar1()), ($d3 + ($this->getParentVar2())));
        echo $div, "\n";
    }

    /**
     * @return int
     */
    public function getExtendVar3()
    {
        return $this->extendVar3;
    }

    /**
     * @param int $extendVar3
     */
    public function setExtendVar3($extendVar3)
    {
        $this->extendVar3 = $extendVar3;
    }
}
