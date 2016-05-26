<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 4/26/16
 * Time: 5:37 PM
 */

namespace AppBundle\Repository;


use AppBundle\Entity\Dependent;
use Doctrine\ORM\EntityRepository;

class DependentsRepository extends EntityRepository
{

    /**
     * Get all the versions for the specified view id, ordered by modification time.
     * @param int $limit
     * @return Dependent[]
     */
    public function findAllOrderByName($limit){

        return $this->getEntityManager()->createQuery(

            'select p from Dependent order by p.fullname asc '

        )->getResult();

    }

    /**
     * find all dependents in ASC order
     * @return array
     */
    public function findAll()
    {
        return $this->findBy(array(), array('name'=>'ASC'));
    }

    /**
     * Find dependents given by IDs
     * @param $ids
     * @return array
     */

    public function findByIds($ids){
        return $this->findBy(array('id' => $ids), array('id' => 'ASC'));
    }

    /**
     * Return all the records from Dependents table and order them by name.
     * @return Dependent[]
     */
    public function findAllOrderedByName(){
        return $this->createQueryBuilder('dependent')
            ->orderBy('dependent.name', 'DESC')
            ->getQuery()
            ->execute();
    }

    /**
     * return # of records deleted
     */
    public function deleteById($id){

        $query = $this->getEntityManager()->createQuery('delete from AppBundle:Dependent e where e.id = :id');
        $query->setParameter('id', $id);
        return $query->execute();
    }

    /**
     * @return Dependent[]
     */
    public function listAll(){
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Dependent p'
            )
            ->getResult();

    }


    /**
     * Another way to return a single record from the database
     * @param $id
     * @return null|object
     */

    public function findOneById($id){
        return $this->findOneBy(array('id' => $id));
    }


}