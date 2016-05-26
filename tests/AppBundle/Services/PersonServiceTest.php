<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 4/28/16
 * Time: 9:51 AM
 */

namespace tests\AppBundle\Services;

use tests\AppBundle\Controller\TestBase;

require_once ("../Controller/TestBase.php");

/**
 * Class EnrollmentServiceTest
 * @package tests\AppBundle\Services
 */
class PersonServiceTest extends TestBase
{
    protected function setUp()
    {
        parent::setUp();
    }
    public function tearDown()
    {
        parent::tearDown();
    }


    /**
     * @param $persons
     */
    //generic function to list all persons
    public function listPersons($persons ){
        echo EOL, EOL;
        foreach($persons as $person){
            echo $person, EOL;
        }
        echo EOL, EOL;
    }

    public function ignore_testSave(){
        $personService = $this->container->get('personservice');
        $person = $personService->save('Muhammet Ergenc','muhammetergenc@gmail.com','male','1993-12-12',7135970821);
        $this->assertNotNull($person);
        echo EOL, $person, EOL;
    }


    //alternative method to retrieve single person
    public function ignore_testFindOneById(){
        $personService = $this->container->get('personservice');
        $person = $personService->findOneById(18);
        echo EOL, $person, EOL;
    }

    //list all persons
    public function ignore_testListAllPersons(){
        $personService = $this->container->get('personservice');
        $persons = $personService->findAll();
        $this->assertGreaterThan(2, count($persons), 'Does not have at least 2 records!');
        $this->listPersons($persons);
    }

    //remove person entity and recheck
    public function ignore_testRemovePerson(){
        $personService = $this->container->get('personservice');
        $persons = $personService->findAll();
        $this->listPersons($persons);
        //delete the person with primary id 14
        $deleted = $personService->removeById(14);
        $this->assertTrue($deleted);
        //this time there is no record to delete anymore
        $deleted = $personService->removeById(14);
        $this->assertFalse($deleted);
        $persons = $personService->findAll();
        $this->listPersons($persons);
    }

    public function testFindById(){
        $personService = $this->container->get('personservice');
        $id = 17;
        $person = $personService->findById($id);
        echo EOL, $person, EOL;
    }

    //find person objects using ids
    public function ignore_testFindByIds(){
        $personService = $this->container->get('personservice');
        $ids = [11, 17, 18];
        $persons = $personService->findByIds($ids);
        $this->listPersons($persons);
    }

    public function testRemoveByIds(){
        $personService = $this->container->get('personservice');
        $ids = [17, 18];
        $deleted = $personService->removeByIds($ids);
        $this->assertTrue($deleted);
        $persons = $personService->findAll();
        $this->listPersons($persons);
    }



}