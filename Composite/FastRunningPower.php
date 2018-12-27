<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 12/26/18
 * Time: 4:42 PM
 */
require_once 'ISuperPower.php';

class FastRunningPower implements ISuperPower
{

    public function boom()
    {
        return "Run as fast as a tortoise!";
    }
}