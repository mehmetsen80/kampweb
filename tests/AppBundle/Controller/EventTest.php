<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 7/19/16
 * Time: 3:33 PM
 */

namespace tests\AppBundle\Controller;

require_once ("TestBase.php");


class EventTest extends  TestBase
{

    public function testFindOneById(){
        $event = $this->entityManager->getRepository('AppBundle:Event')->findOneBy(6);
        echo EOL, $event, EOL;
    }
}
