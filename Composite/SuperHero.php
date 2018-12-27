<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 12/26/18
 * Time: 4:31 PM
 */
require_once 'AbstractPerson.php';
require_once 'CompositeSuperPower.php';

class SuperHero extends AbstractPerson
{
    private $superPower;

    /**
     * @param mixed $superPower
     */
    public function setSuperPowers($superPowers)
    {
        $this->superPower = new CompositeSuperPower();
        $this->superPower->SetSuperPowers($superPowers);
    }

    public function activateSuperPower()
    {
        echo "I can ".$this->superPower->boom();
    }

}