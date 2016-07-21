<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 4/21/16
 * Time: 3:00 PM
 */

namespace AppBundle\Util;


use AppBundle\Entity\Dependent;
use AppBundle\Entity\Event;
use AppBundle\Entity\Person;
use AppBundle\Entity\User;
use Doctrine\ORM\EntityManager;

class EntityBuilder
{

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    protected $entityManager;

    public  function __construct(EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }

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


    public static function newEvent($name ,$startdate, $enddate, $description, User $createdby){

        $event = new Event();

        $event->setName($name);
        $event->setStartDate($startdate);
        $event->setEndDate($enddate);
        $event->setDescription($description);
        $event->setCreatedby($createdby);

        return $event;

    }


}