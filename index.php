<?php

class Car{
    public function color(){
        echo 'red';
    }
    public function engine(){
        echo "4000cc";
    }
    public function model (){
        echo 'B1344';
    }
}

class Calculator{
    public function sum($numb1, $numb2){

        $x=$numb1;
        $y=$numb2;

        $result = $x+$y;
       return $result;
    }

    public function sub($numb1, $numb2){

        $x=$numb1;
        $y=$numb2;

        $result = $x-$y;
       return $result;
    }

    public function mul($numb1, $numb2){

        $x=$numb1;
        $y=$numb2;

        $result = $x*$y;
       return $result;
    }

    public function div($numb1, $numb2){

        $x=$numb1;
        $y=$numb2;

        $result = $x/$y;
       return $result;
    }
}

$objectCar = new Car();

$objectCar->engine();
echo "<br>";

$objectCar->color();
echo "<br>";
$objectCar->model();

echo "<br>";
$objectCalculator = new Calculator ();

echo 'the sum is ='. $objectCalculator->sum(20, 10);

echo "<br>";

echo 'the sum is ='. $objectCalculator->sum(60, 10);

echo "<br>";

echo 'the div is ='. $objectCalculator->div(100, 5);
echo "<br>";

echo 'the mul is ='. $objectCalculator->mul(200, 5);

echo "<br>";

echo 'the sub is ='. $objectCalculator->sub(200, 100);
?>