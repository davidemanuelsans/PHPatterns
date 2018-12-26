<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 12/26/18
 * Time: 4:57 PM
 */
require_once 'FastRunningPower.php';
require_once 'FlyingPower.php';
require_once 'SwimmingPower.php';
require_once 'BeingAbleToWatchTwoEpisodesOfMarimar.php';

class SuperPowerFactory
{
    public static function createSuperPower($power) {
        switch(strtolower($power)) {
            case("swim") :
                return new SwimmingPower();
                break;
            case("fly") :
                return new FlyingPower();
                break;
            case("run") :
                return new FastRunningPower();
                break;
            default :
                return new BeingAbleToWatchTwoEpisodesOfMarimar();
        }
    }
}