<?php


class PokerDice
{

    public $faces = ["K", "Q", "J", 7, 8];
    public $lastrun = null;
    private static $totalthrows = 0;

    public function throw()
    {  
       self::$totalthrows++;
        $this->lastrun =  $this->faces[random_int(0,4)];           //shuffle//

    }

    public function shapeName()
    {
        return $this->lastrun;                              

    }

    public static function getTotalThrows()
    {
        return self::$totalthrows;
    }
}




?>