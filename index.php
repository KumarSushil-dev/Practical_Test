<?php

// TASK-CROSSPOLES 1. Write a program to find a position of [RIGHT,DOWN,LEFT,LEFT,DOWN]

class Ball
{
    function __construct(){
     // Code called for each new Ball we create
    }
    
    private function getPosition($n, &$ball_moveposition)
    {
        $x = 0; //row define for matrix
        $y = 0; //column define for matrix
        foreach ($ball_moveposition as $data)
        {
            $dx = 0;
            $dy = 0;
            switch ($data) {
                case "LEFT":
                    $dy = -1;
                    break;
                case "RIGHT":
                    $dy = 1;
                    break;
                case "UP":
                    $dx = -1;
                    break;
                case "DOWN":
                    $dx = 1;
                    break;
            }
            if (($x + $dx) >= 0  && ($y + $dy) >= 0 && ($y + $dy) < $n && ($x + $dx) < $n)
            {
                $x += $dx;
                $y += $dy;
            }
        }
        return $x * $n + $y; // (row*size)+column
    }
    public function main(&$args)
    {
       $matrixsize = 4;
       $ball_moveposition=array("RIGHT", "DOWN", "LEFT", "LEFT", "DOWN");
       echo $this->getPosition($matrixsize,$ball_moveposition);
    }
}
$testObject = new Ball(); // Call Class Ball declarations

$testObject->main($argv);
?>
