<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 7/26/16
 * Time: 11:45 AM
 */

namespace AppBundle\Services;


use Doctrine\ORM\EntityManager;

class AttendeeService extends AbstractService
{
    public  function __construct(EntityManager $entityManager){
        parent::__construct($entityManager, 'AppBundle:Attendee');
    }
}