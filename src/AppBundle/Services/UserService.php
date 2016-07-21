<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 7/20/16
 * Time: 2:43 PM
 */

namespace AppBundle\Services;

use Doctrine\ORM\EntityManager;

class UserService extends AbstractService
{

    public  function __construct(EntityManager $entityManager){
        parent::__construct($entityManager, 'AppBundle:Event');
    }


}