<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 7/14/16
 * Time: 1:21 PM
 */

namespace AppBundle\Services;


use Doctrine\ORM\EntityManager;


class LogService extends AbstractService
{

    public  function __construct(EntityManager $entityManager){
        parent::__construct($entityManager, 'AppBundle:Log');
    }

}