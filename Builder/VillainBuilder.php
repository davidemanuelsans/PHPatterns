<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 12/27/18
 * Time: 11:24 PM
 */
require_once 'Villain.php';

class VillainBuilder {
    private $name = "This villain";
    private $sadStory = "had a normal childhood";
    private $mentalIllnesses = "was pretty normal(Foucaults not needed ;) )";
    private $somePhysicalImpairment = "was not physically impaired";
    private $intelligence = "was not particularly smart nor dumb";
    private $weirdVoice = "had a normal voice tone";
    private $appearance = "had a normal appearance";
    private $mortalEnemy = "his mortal enemy was everyone.";
    private $evilPower = "destroy the universe";

    public function withName($name) {
        $this->name = $name;

        return $this;
    }

    public function withASadStory($sadStory) {
        $this->sadStory = $sadStory;

        return $this;
    }

    public function withAMentalIllness($mentalIllness) {
        $this->mentalIllnesses = $mentalIllness;

        return $this;
    }

    public function withSomePhysicalImpairment($physicalImpairment) {
        $this->somePhysicalImpairment = $physicalImpairment;

        return $this;
    }

    public function withAnIntelligenceLevel($inteligence) {
        $this->intelligence = $inteligence;

        return $this;
    }

    public function withAWeirdVoiceTone($voiceTone) {
        $this->weirdVoice = $voiceTone;

        return $this;
    }

    public function withAppearance($appearance) {
        $this->appearance = $appearance;

        return $this;
    }

    public function withAMortalEnemy($mortalEnemy) {
        $this->mortalEnemy = $mortalEnemy;

        return $this;
    }

    public function withAnEvilPower($evilPower) {
        $this->evilPower = $evilPower;

        return $this;
    }

    public function build() {
        $villain = new Villain();

        $villain->setName($this->name);
        $villain->setSadStory($this->sadStory);
        $villain->setAppearance($this->appearance);
        $villain->setMentalIllnesses($this->mentalIllnesses);
        $villain->setIntelligence($this->intelligence);
        $villain->setSomePhysicalImpairment($this->somePhysicalImpairment);
        $villain->setIntelligence($this->intelligence);
        $villain->setWeirdVoice($this->weirdVoice);
        $villain->setMortalEnemy($this->mortalEnemy);
        $villain->setEvilPower($this->evilPower);

        return $villain;
    }

}