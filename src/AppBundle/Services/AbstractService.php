<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 7/19/16
 * Time: 3:17 PM
 */

namespace AppBundle\Services;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Config\Definition\Exception\Exception;

class AbstractService
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    protected $entityManager;
    /**
     * @var $mixed
     */
    private $repositoryName;
    public  function __construct(EntityManager $entityManager, $repositoryName){
        $this->entityManager = $entityManager;
        $this->repositoryName = $repositoryName;
    }

    //save single entity
    public function saveEntity($entity){
        try{
            $this->entityManager->persist($entity);
            $this->entityManager->flush($entity);
        }catch (Exception $e){
            echo $e->getMessage(), EOL;
            return null;
        }
        return $entity;
    }

    //save bulk of entities
    public function saveEntities($entities){
        $saved_entities = array();
        try {
            //iterate each entity to be saved
            foreach ($entities as $entity) {
                $this->entityManager->persist($entity);
                $saved_entities[] = $entity;
            }
            $this->entityManager->flush();//commit
        }catch (Exception $e) {
            echo $e->getMessage(), EOL;
        }
        return $saved_entities;
    }

    //delete bulk of entities
    public function deleteEntities($delete_entities){
        $deleted_entities = array();
        try {
            //let's dump all ids into array and delete the entity bulk list
            $ids = array();
            foreach ($delete_entities as $delete_entity) {
                $deleted_entities[] = $delete_entity;
                $ids[] = $delete_entity->getId();
            }
            $this->removeByIds($ids);//remove bulk of entities by its ids
        }catch (Exception $e) {
            echo $e->getMessage(), EOL;
        }
        return $deleted_entities;
    }

    public function findAll(){
        return $this->entityManager->getRepository($this->repositoryName)->findAll();
    }

    public function findOneById($id){
        return $this->entityManager->getRepository($this->repositoryName)->findOneById($id);
    }

    public function findById($id){
        return $this->entityManager->getRepository($this->repositoryName)->findById($id);
    }

    public function findByIds($ids){
        return $this->entityManager->getRepository($this->repositoryName)->findByIds($ids);
    }

    //remove (delete) entity by Id
    public function removeById($id){
        $entity = $this->entityManager->getRepository($this->repositoryName)->find($id);
        if(!is_null($entity)){
            $this->entityManager->remove($entity);
            $this->entityManager->flush();
            return true;
        }
        return false;
    }

    //remove bulk of entities by Ids
    //array("12","32","11")
    public function removeByIds($ids){
        try{
            //first find the associated entities
            $entities = $this->findByIds($ids);
            foreach ($entities as $entity){
                $this->entityManager->remove($entity);//now remove each entity
            }
            $this->entityManager->flush();//commit
        }catch (Exception $e){
            return false;
        }
        return true;
    }

    //delete single Entity by Id
    public function deleteById($id){
        return $this->entityManager->getRepository($this->repositoryName)->deleteById($id);
    }
}