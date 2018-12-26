<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 12/26/18
 * Time: 4:03 PM
 */

require 'Limo.php';
require 'SmallCar.php';
require 'ElectricCar.php';
require_once 'enumLoadType.php';

class LandVehicleFactory
{
    public static function createLandVehicle($type) {
        switch ($type) {
            case (enumLoadType::VIP) :
                return new Limo();
                break;
            case (enumLoadType::HIPSTER) :
                return new ElectricCar();
                break;
            default:
                return new SmallCar();
        }
    }
}