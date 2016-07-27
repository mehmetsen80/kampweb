<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 7/26/16
 * Time: 10:35 AM
 */

namespace tests\AppBundle\Controller;
use AppBundle\Entity\Event;
use AppBundle\Entity\User;
use AppBundle\Util\EntityBuilder;
use Doctrine\ORM\EntityManager;

require_once ("TestBase.php");

class AttendeeTest extends TestBase
{


    public function testSaveAttendee(){

        //get user service
        $userService = $this->container->get('userservice');

        //get event service
        $eventservice = $this->container->get('eventservice');

        $createdBy = $userService->findOneById(4);

        //get user
        $user = $userService->findOneById(6);

        //get event
        $eventid = $eventservice->findOneById(8);

        $name = $user->getFullname();
        $username = $user->getUsername();
        $attendee = EntityBuilder::newAttendee($name, $createdBy, $username, $eventid);

        $this->entityManager = $this->refreshEntityManager($this->entityManager);

        $this->entityManager->persist($attendee);
        $this->entityManager->flush($attendee);
        echo $attendee, EOL, EOL;

    }

    /**
     * @param $em EntityManager
     *
     * @return EntityManager
     */
    private function refreshEntityManager(EntityManager $em)
    {
        if (!$em->isOpen()) {
            $em = $em->create($em->getConnection(), $em->getConfiguration());
        }

        return $em;
    }

}
