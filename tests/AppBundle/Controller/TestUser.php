<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 4/29/16
 * Time: 11:42 AM
 */

namespace tests\AppBundle\Controller;



use AppBundle\Util\EntityBuilder;


require_once 'TestBase.php';

class TestUser extends TestBase
{

    protected function setUp()
    {
        parent::setUp();
    }
    public function tearDown()
    {
        parent::tearDown();
    }


    public function testSaveUser(){
        $user = EntityBuilder::newUser("Ibrahim Suslu", "isuslu@na.edu", "male", "1982-12-1");
        $this->entityManager->persist($user);
        $this->entityManager->flush($user);
        echo $user, EOL, EOL;

    }

}




