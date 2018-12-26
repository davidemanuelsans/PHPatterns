<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 12/26/18
 * Time: 1:17 PM
 */
require_once 'iLandVehicle.php';

class SmallCar implements iLandVehicle
{
    private $miles = 0;
    private $fuel = 100;
    private $seconds = 100000;

    private function moving() {
        for($index = $this->miles; $index >= 0; $index--) {
            echo "-";
            usleep($this->seconds);
            echo "-";
            usleep($this->seconds);
            echo "-";
            usleep($this->seconds);
        }
        echo "->";
        usleep($this->seconds * 4);
        echo "\n";
    }

    public function move($miles)
    {
        if ($this->fuel >= 10) {
            $this->fuel -= $miles;
            $this->miles += $miles;
            $this->moving();
        } else {
            echo "OUT OF FUEL";
        }
    }

    public function chargeFuel($fuel)
    {
        $this->fuel += $fuel;
    }

}