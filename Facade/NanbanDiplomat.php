<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 12/28/18
 * Time: 2:11 PM
 */
require_once 'CivilWarJapan.php';

class NanbanDiplomat
{
    public function talkToTheEmperor() {
        return CivilWarJapan::getTheEmperor()->talkToDiplomat();
    }

    public function talkToTheShogun() {
        return CivilWarJapan::getTheShogun()->talkToDiplomat();
    }

    public function talkToTheRuler() {
        return CivilWarJapan::getTheRuler()->talkToDiplomat();
    }
}