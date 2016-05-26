<?php
/**
 * Created by PhpStorm.
 * User: muhammetergenc
 * Date: 3/31/16
 * Time: 2:12 PM
 */

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

use AppBundle\Entity\Person;

class PersonRepository extends EntityRepository
{


    /**
     * Get all the versions for the specified view id, ordered by modification time.
     * @param int $limit
     * @return Person[]
     */
    public function findAllOrderByName($limit){

        return $this->getEntityManager()->createQuery(

            'select p from Person order by p.fullname asc '

        )->getResult();

    }

    /**
     * find all persons in ASC order
     * @return array
     */
    public function findAll()
    {
        return $this->findBy(array(), array('fullname'=>'ASC'));
    }

    /**
     * Find persons given by IDs
     * @param $ids
     * @return array
     */

    public function findByIds($ids){
        return $this->findBy(array('id' => $ids), array('id' => 'ASC'));
    }

    /**
     * @return Person[]
     */
    public function findAllOrderedByName(){
        return $this->createQueryBuilder('person')
            ->orderBy('person.fullname', 'DESC')
            ->getQuery()
            ->execute();
    }

    /**
     * return # of records deleted
     */
    public function deleteById($id){

        $query = $this->getEntityManager()->createQuery('delete from AppBundle:Person e where e.id = :id');
        $query->setParameter('id', $id);
        return $query->execute();
    }

    /**
     * @return Person[]
     */
    public function listAll(){
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Person p'
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

    /**
     * @param int $id
     * @return Person
     */
    // $id = 17
    public function findById($id){
        return $this->find($id, array('id' => 'ASC'));
    }



}