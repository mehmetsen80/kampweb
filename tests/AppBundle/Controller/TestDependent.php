<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 4/21/16
 * Time: 5:20 PM
 */

namespace Tests\AppBundle\Controller;


use AppBundle\Util\EntityBuilder;


require_once 'TestBase.php';

class TestDependent extends TestBase
{

    protected function setUp()
    {
        parent::setUp();
    }
    public function tearDown()
    {
        parent::tearDown();
    }

    public function ListDependents($dependents){
        echo EOL, EOL;
        foreach($dependents as $dependent){
            echo $dependent, EOL;
        }
        echo EOL, EOL;
    }

    public function ignore_testSaveDependent(){
        $dependent = EntityBuilder::newDependent("Ibrahim Suslu", "isuslu@na.edu", "male", "1982-12-1");
        $this->entityManager->persist($dependent);
        $this->entityManager->flush($dependent);
        echo $dependent, EOL, EOL;

    }

    public function ignore_testUniqueDependent(){

        $dependent = $this->entityManager->getRepository('AppBundle:Dependent')->find(2);
        print("Dependent Name: ".$dependent->getName());
    }

    /**
     * List all the records in the Dependent Table
     */

    public function ignore_testListAll(){

        $person = $this->entityManager->getRepository('AppBundle:Person')->listAll();   
        foreach ($person as $persons){
            print $persons->getFullname()."\n";
        }

    }

    public function ignore_testDeleteByID(){
        echo 'Before Deleting';
        $dependent = $this->entityManager->getRepository('AppBundle:Dependent')->listAll();
        foreach ($dependent as $dependents){
            print $dependents->getName()."\n";
        }

        $id = 2;
        $dependent = $this->entityManager->getRepository('AppBundle:Dependent')->find($id);
        $this->assertNotNull($dependent, 'Dependent couldnt found with id '.$id.'!');

        if(!is_null($dependent)){
            $this->entityManager->remove($dependent);
            $this->entityManager->flush();
        }
        echo 'After Deleting';
        $dependent = $this->entityManager->getRepository('AppBundle:Dependent')->listAll();
        foreach ($dependent as $dependents){
            print $dependents->getName()."\n";
        }


    }

    public function ignore_testFindByIDs(){
        $ids = [4,5,6];
        $dependents = $this->entityManager->getRepository('AppBundle:Dependent')->findByIds($ids);
        $this->assertEquals(3, count($dependents));
    }

    public function ignore_testFindOneById(){
        $dependent = $this->entityManager->getRepository('AppBundle:Dependent')->findOneById(7);
        echo EOL, $dependent, EOL;
    }

    //delete dependent using DQL which returns the total number of deleted records
    public function ignore_testDeleteEnrollmentByDQL(){
        $numdeleted = $this->entityManager->getRepository('AppBundle:Dependent')->deleteById(7);
        echo EOL, "Num Deleted: ". $numdeleted, EOL;
    }

    //delete bulk dependents
    public function ignore_testDeleteBulkEnrollments(){
        $ids = [4, 5, 6, 8];
        $dependents = $this->entityManager->getRepository('AppBundle:Dependent')->findByIds($ids);
        foreach ($dependents as $dependent){
            $this->entityManager->remove($dependent);
        }
        $this->entityManager->flush();
    }

    }




