<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 12/28/18
 * Time: 12:45 PM
 */
require_once 'IDiplomat.php';

class Emperor implements IDiplomat
{
    private $name;
    private static $emperor;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    private function __construct($name) {
        $this->name = $name;
    }

    public static function getEmperor() {
        if(self::$emperor == null) return new Emperor("Go-Nara");
        return self::$emperor;
    }

    public function talkToDiplomat()
    {
        return "I am the emperor ".$this->name.", but, my power reaches only until that door";
    }
}