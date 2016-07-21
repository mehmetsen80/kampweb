<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 7/19/16
 * Time: 3:16 PM
 */

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class AbstractRepository extends EntityRepository
{
    public function findAll(){
        return $this->findBy(array(), array('id'=>'DESC'));
    }
    // $ids = 84
    public function findById($id){
        return $this->find($id, array('id' => 'ASC'));
    }
    // $ids = array('1','2','5','84') or $ids = ["1","2","5","84"]
    public function findByIds($ids){
        return $this->findBy(array('id' => $ids), array('id' => 'ASC'));
    }
    //another alternative method to retrieve single Entity
    public function findOneById($id){
        return $this->findOneBy(array('id' => $id));
    }
}