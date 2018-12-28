<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 12/27/18
 * Time: 10:22 PM
 */
require_once 'IVillain.php';

class Villain implements IVillain {
    private $name;
    private $sadStory;
    private $mentalIllnesses;
    private $somePhysicalImpairment;
    private $intelligence;
    private $weirdVoice;
    private $appearance;
    private $mortalEnemy;
    private $evilPower;

    public function doYourEvil()
    {
        echo $this->name
            ." ".$this->sadStory
            .", ".$this->mentalIllnesses
            .", ".$this->somePhysicalImpairment
            .", ".$this->intelligence
            .", ".$this->weirdVoice
            .", ".$this->appearance
            ." and ".$this->mortalEnemy." was her/his mortal enemy"
            .". Will eventually ".$this->evilPower.".";
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $sadStory
     */
    public function setSadStory($sadStory)
    {
        $this->sadStory = $sadStory;
    }

    /**
     * @param mixed $mentalIllnesses
     */
    public function setMentalIllnesses($mentalIllnesses)
    {
        $this->mentalIllnesses = $mentalIllnesses;
    }

    /**
     * @param mixed $somePhysicalImpairment
     */
    public function setSomePhysicalImpairment($somePhysicalImpairment)
    {
        $this->somePhysicalImpairment = $somePhysicalImpairment;
    }

    /**
     * @param mixed $intelligence
     */
    public function setIntelligence($intelligence)
    {
        $this->intelligence = $intelligence;
    }

    /**
     * @param mixed $weirdVoice
     */
    public function setWeirdVoice($weirdVoice)
    {
        $this->weirdVoice = $weirdVoice;
    }

    /**
     * @param mixed $appearance
     */
    public function setAppearance($appearance)
    {
        $this->appearance = $appearance;
    }

    /**
     * @param mixed $mortalEnemy
     */
    public function setMortalEnemy($mortalEnemy)
    {
        $this->mortalEnemy = $mortalEnemy;
    }

    /**
     * @param mixed $evilPower
     */
    public function setEvilPower($evilPower)
    {
        $this->evilPower = $evilPower;
    }
}