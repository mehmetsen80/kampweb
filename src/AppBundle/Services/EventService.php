<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 7/19/16
 * Time: 3:22 PM
 */

namespace AppBundle\Services;

use Doctrine\ORM\EntityManager;

class EventService extends AbstractService
{

    public  function __construct(EntityManager $entityManager){
        parent::__construct($entityManager, 'AppBundle:Event');
    }

}