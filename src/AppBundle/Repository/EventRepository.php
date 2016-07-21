<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 7/15/16
 * Time: 12:26 PM
 */

namespace AppBundle\Repository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EventRepository extends AbstractRepository
{
    public function countEvents()
    {
        return $this->createQueryBuilder('u')
            ->select('count(u.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }
}
