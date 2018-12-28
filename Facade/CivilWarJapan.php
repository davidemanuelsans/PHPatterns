<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 12/28/18
 * Time: 1:13 PM
 */
require_once 'Emperor.php';
require_once 'Noble.php';

class CivilWarJapan
{
    private static $daimyos = null;

    public static function daimyos() {
        if (self::$daimyos == null) {
            self::$daimyos = array(
                new Noble("Imagawa","Daimyo",60000,true),
                new Noble("Takeda","Daimyo",75000,true),
                new Noble("Uesugi","Daimyo",70000,true),
                new Noble("Oda","Daimyo",80000,false));
        }
        return self::$daimyos;
    }

    public static function getTheEmperor() {
        return Emperor::getEmperor();
    }

    public static function getTheShogun() {
        $daimyos = self::daimyos();
        $shogunableDaimyos = array_filter($daimyos, function($daimyo) {
            return $daimyo->minamotoDescendent();
        });

        $index = rand(0, count($shogunableDaimyos) -1);

        return $shogunableDaimyos[$index];
    }

    public static function getTheRuler() {
        $daimyos = self::daimyos();
        $powerfulDaimyoPower = -1;
        $powerfulDaimyoIndex = 0;

        for ($index = 0; $index < count($daimyos); $index++) {
            if ($daimyos[$index]->getPower() > $powerfulDaimyoPower) {
                $powerfulDaimyoPower = $daimyos[$index]->getPower();
                $powerfulDaimyoIndex = $index;
            }
        }

        return $daimyos[$powerfulDaimyoIndex];
    }
}