<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 4/21/16
 * Time: 3:00 PM
 */

namespace AppBundle\Util;


use AppBundle\Entity\Dependent;
use AppBundle\Entity\Person;

class EntityBuilder
{
    public static function newPerson($fullname, $email, $gender, $birthday, $cellphone){
        $person = new Person();
        $person->setFullname($fullname);
        $person->setEmail($email);
        $person->setGender($gender);
        $person->setBirthday($birthday);
        $person->setCellphone($cellphone);

        return $person;
    }

    public static function newDependent($name, $email, $gender, $birthday){
        $dependent = new Dependent();
        $dependent->setName($name);
        $dependent->setEmail($email);
        $dependent->setGender($gender);
        $dependent->setBirthday($birthday);

        return $dependent;
    }

    public static function newLogin($username, $password){
        $dependent = new Dependent();
        $dependent->setName($name);
        $dependent->setEmail($email);
        $dependent->setGender($gender);
        $dependent->setBirthday($birthday);

        return $dependent;
    }

}