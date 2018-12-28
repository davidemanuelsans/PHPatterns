<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 12/28/18
 * Time: 12:22 PM
 */
require_once 'IDiplomat.php';

class Noble implements IDiplomat
{
    private $name;
    private $nobilliaryTitle;
    private $power;
    private $minamotoDescendent;
    private $diplomacy;

    /**
     * Noble constructor.
     * @param $name
     * @param $nobiliaryTitle
     * @param $power
     * @param $minamotoDescendent
     */
    public function __construct($name, $nobilliaryTitle, $power, $minamotoDescendent)
    {
        $this->name = $name;
        $this->nobilliaryTitle = $nobilliaryTitle;
        $this->power = $power;
        $this->minamotoDescendent = $minamotoDescendent;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getNobilliaryTitle()
    {
        return $this->nobilliaryTitle;
    }

    /**
     * @return mixed
     */
    public function getPower()
    {
        return $this->power;
    }

    public function minamotoDescendent() {
        return $this->minamotoDescendent;
    }

    public function talkToDiplomat()
    {
        return "I am ".$this->name;
    }
}