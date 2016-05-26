<?php
/**
 * Created by PhpStorm.
 * User: muhammetergenc
 * Date: 3/29/16
 * Time: 5:01 PM
 */

namespace AppBundle\Services;

use AppBundle\Util\EntityBuilder;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Config\Definition\Exception\Exception;

class PersonService
{

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;

    /**
     * PersonService constructor.
     * @param EntityManager $entityManager
     */
    public  function __construct(EntityManager $entityManager){

        $this->entityManager = $entityManager;
    }

    /**
     * @param $fullname
     * @param $email
     * @param $gender
     * @param $birthday
     * @param $cellphone
     * @return \AppBundle\Entity\Person|null
     */
    public function save($fullname, $email, $gender, $birthday, $cellphone){
        try{
            $person = EntityBuilder::newPerson('Burak Ergene','burakergene@na.edu','male','1994-12-01', 2137891232);
            $this->entityManager->persist($person);
            $this->entityManager->flush($person);
        }catch (Exception $e){
            echo $e->getMessage(), EOL;
            return null;
        }

        return $person;
    }

    /**
     * @return \AppBundle\Entity\Person[]|array
     */
    public function getAllPersons(){

        $persons = $this->entityManager->getRepository('AppBundle:Person')->findAll();

        return $persons;

    }

    /**
     * @return array
     */
    public function findAll(){
        return $this->entityManager->getRepository('AppBundle:Person')->findAll();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findOneById($id){
        return $this->entityManager->getRepository('AppBundle:Person')->findOneById($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findById($id){
        return $this->entityManager->getRepository('AppBundle:Person')->findById($id);
    }

    /**
     * @param $ids
     * @return mixed
     */
    public function findByIds($ids){
        return $this->entityManager->getRepository('AppBundle:Person')->findByIds($ids);
    }

    /**
     * @param $id
     * @return bool
     */
    //remove (delete) person by Id
    public function removeById($id){
        $person = $this->entityManager->getRepository('AppBundle:Person')->find($id);
        if(!is_null($person)){
            $this->entityManager->remove($person);
            $this->entityManager->flush();
            return true;
        }
        return false;
    }
    /**
     * @param $ids
     * @return bool
     * remove bulk of enrollments by Ids
     */
    public function removeByIds($ids){
        try{
            //first find the associated persons
            $persons = $this->findByIds($ids);
            foreach ($persons as $person){
                $this->entityManager->remove($person);//now remove each person
            }
            $this->entityManager->flush();//commit
        }catch (Exception $e){
            return false;
        }
        return true;
    }
    /**
     * @param $id
     * @return mixed
     * delete single Person by Id
     */

    public function deleteById($id){
        return $this->entityManager->getRepository('AppBundle:Person')->deleteById($id);
    }


}