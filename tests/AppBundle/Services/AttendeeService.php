<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 7/26/16
 * Time: 10:53 AM
 */

namespace tests\AppBundle\Services;


use tests\AppBundle\Controller\TestBase;
use AppBundle\Services\EventService as eventService;

require_once("../Controller/TestBase.php");

class AttendeeService extends TestBase
{

    protected function setUp()
    {
        parent::setUp();
    }
    public function tearDown()
    {
        parent::tearDown();
    }

    public function ignore_testFindAll(){
        $eventservice = $this->container->get('eventservice');
        $events = $eventservice->findAll();
        $this->listEvents($events);

    }

    public function ignore_testDeleteByID(){
        $eventservice = $this->container->get('eventservice');
        $event = $eventservice->removeById(13);
        echo $event, EOL;
    }

    public function ignore_testShowEvents(){
        $eventservice = $this->container->get('eventservice');
        $event = $eventservice->findOneById('10');
        echo $event, EOL;
    }



    public function listEvents($events){
        echo EOL, EOL;
        foreach($events as $event){
            echo $event, EOL;
        }
        echo EOL, EOL;
    }
}
