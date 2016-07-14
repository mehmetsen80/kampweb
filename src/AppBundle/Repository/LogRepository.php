<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 7/14/16
 * Time: 3:54 PM
 */

namespace AppBundle\Repository;


use AppBundle\Entity\Log;
use Doctrine\ORM\EntityRepository;


class LogRepository extends EntityRepository
{
    public function findAll(){
        return $this->findBy(array(), array('id'=>'DESC'));
    }
    /**
     * @param int $ids
     * @return Log
     */
    // $ids = 84
    public function findById($id){
        return $this->find($id, array('id' => 'ASC'));
    }
    /**
     * @param int $ids
     * @return Log[]
     */
    // $ids = array('1','2','5','84') or $ids = ["1","2","5","84"]
    public function findByIds($ids){
        return $this->findBy(array('id' => $ids), array('id' => 'ASC'));
    }
    /**
     * @param int $id
     * @return Log
     */
    //another alternative method to retrieve single Document
    public function findOneById($id){
        return $this->findOneBy(array('id' => $id));
    }
}