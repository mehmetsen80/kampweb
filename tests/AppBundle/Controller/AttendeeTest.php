<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 7/26/16
 * Time: 10:35 AM
 */

namespace tests\AppBundle\Controller;
use AppBundle\Entity\Attendee;
use AppBundle\Entity\Event;
use AppBundle\Entity\User;
use AppBundle\Util\EntityBuilder;
use Doctrine\ORM\EntityManager;

require_once ("TestBase.php");

class AttendeeTest extends TestBase
{


    public function testSaveAttendee($userid, $eventid){

        $em = $this->get('doctrine')->getManager();
        $createdBy = $this->getUser();
        //get user service
        $userService = $this->container->get('userservice');

        //get user
        $user = $userService->findOneById(['id'=>$userid]);

        //get event service
        $eventservice = $this->container->get('eventservice');

        //get event
        $event = $eventservice->findOneById(['id'=>$eventid]);


        $attendee = new Attendee();

        $attendee->setUsername($user->getUsername());
        $attendee->setName($user->getFullname());
        $attendee->setCreatedBy($createdBy);
        $attendee->setEvent($event);

        $em->persist($attendee);
        $em->flush();
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
