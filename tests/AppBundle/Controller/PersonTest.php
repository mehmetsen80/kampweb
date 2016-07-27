<?php
/**
 * Created by PhpStorm.
 * User: muhammetergenc
 * Date: 3/29/16
 * Time: 3:07 PM
 */

namespace Tests\AppBundle\Controller;


use AppBundle\Util\EntityBuilder;


require_once 'TestBase.php';

class PersonTest extends TestBase
{

    protected function setUp()
    {
        parent::setUp();
    }
    public function tearDown()
    {
        parent::tearDown();
    }

    public function ListPersons($persons){
        echo EOL, EOL;
        foreach($persons as $person){
            echo $person, EOL;
        }
        echo EOL, EOL;
    }

    public function ignore_testSavePeron(){

        $person = EntityBuilder::newPerson("Ibrahim Suslu", "isuslu@example.com", "male", "1972-01-01", "123123123");
        $this->entityManager->persist($person);
        $this->entityManager->flush($person);
        echo $person, EOL, EOL;
    }

    public function ignore_testUniquePerson(){

        $person = $this->entityManager->getRepository('AppBundle:Person')->find(11);

        echo EOL, $person, EOL;

        foreach($person->getDependents() as $dependent){
            print("Dependent Name: ".$dependent->getName()." Parent Name: ".$person->getFullname());
        }
    }

    /**
     * Duplicated test??
     */
    public function ignore_testListAllPersons(){

        $personService = $this->app->getContainer()->get('personservice');
        $persons = $personService->getAllPersons();

        $this->assertGreaterThan(10,count($persons));

        foreach($persons as $person){
            print("Person FullName: ".$person->getFullname()."\n");
        }
    }

    /**
     * List all the records in Person Table
     */

    public function ignore_testListAll(){

       $person = $this->entityManager->getRepository('AppBundle:Person')->listAll();
        foreach ($person as $persons){
            print $persons->getFullname()."\n";
        }

    }

    public function ignore_testDeleteByID(){
        echo 'Before Deleting';
        $person = $this->entityManager->getRepository('AppBundle:Person')->listAll();
        foreach ($person as $persons){
            print $persons->getFullname()."\n";
        }

        $id = 17;
        $person = $this->entityManager->getRepository('AppBundle:Person')->find($id);
        $this->assertNotNull($person, 'No such enrollment with id '.$id.'!');

        if(!is_null($person)){
            $this->entityManager->remove($person);
            $this->entityManager->flush();
        }
        echo 'After Deleting';
        $person = $this->entityManager->getRepository('AppBundle:Person')->listAll();
        foreach ($person as $persons){
            print $persons->getFullname()."\n";
        }


    }

    public function ignore_testFindByIDs(){
        $ids = [11,12,13];
        $personList = $this->entityManager->getRepository('AppBundle:Person')->findByIds($ids);
        $this->assertEquals(3, count($personList));
    }


    public function ignore_testFindOneById(){
        $person = $this->entityManager->getRepository('AppBundle:Person')->findOneById(13);
        echo EOL, $person, EOL;
    }

    //delete person using DQL which returns the total number of deleted records
    public function ignore_testDeleteEnrollmentByDQL(){
        $numdeleted = $this->entityManager->getRepository('AppBundle:Person')->deleteById(13);
        echo EOL, "Num Deleted: ". $numdeleted, EOL;
    }

    //delete bulk person
    public function ignore_testDeleteBulkEnrollments(){
        $ids = [18, 12, 15, 16];
        $persons = $this->entityManager->getRepository('AppBundle:Person')->findByIds($ids);
        foreach ($persons as $person){
            $this->entityManager->remove($person);
        }
        $this->entityManager->flush();
        }


}
