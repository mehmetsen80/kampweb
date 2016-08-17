<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 8/1/16
 * Time: 12:26 PM
 */

namespace AppBundle\Services;


use Doctrine\ORM\EntityManager;

class DependentService extends AbstractService
{
    public  function __construct(EntityManager $entityManager){
        parent::__construct($entityManager, 'AppBundle:Dependent');
    }
}