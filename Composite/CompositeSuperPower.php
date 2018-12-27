<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 12/26/18
 * Time: 4:51 PM
 */
require_once 'SuperPowerFactory.php';
require_once 'ISuperPower.php';

class CompositeSuperPower implements ISuperPower
{
    private $superPowers = array();

    public function SetSuperPowers($superPowers) {
        $array = explode(',', $superPowers);

        foreach($array as $superPower) {
            $this->superPowers[] = SuperPowerFactory::createSuperPower($superPower);
        }
    }

    public function boom()
    {
        $result = '';

        foreach ($this->superPowers as $superPower) {
            $result = $result." ".$superPower->boom()."\n";
        }

        return $result;
    }

}