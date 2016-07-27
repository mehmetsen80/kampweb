<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 7/26/16
 * Time: 12:09 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Attendee;
use AppBundle\Util\EntityBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AttendeeController extends Controller
{
    /**
     * @Route("/attendee/{userid}/event/{eventid}", name="addattendees")
     */
    public function saveAttendee($userid, $eventid){
        $createdBy = $this->getUser();
        //get user service
        $userService = $this->container->get('userservice');

        //get user
        $user = $userService->findOneById(['id'=>$userid]);

        //get event service
        $eventservice = $this->container->get('eventservice');

        //get event
        $eventid = $eventservice->findOneById(['id'=>$eventid]);

        //get attendee service
        $attendeeService = $this->container->get('attendeeservice');

//        $addform = $this->createForm(AttendeeForm::class);
//        $addform->handleRequest($request);
//        if ($addform->isSubmitted() && $addform->isValid()) {
            $name = $user->getFullname();
            $username = $user->getUsername();
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager = $entityManager->create(
                $entityManager->getConnection(), $entityManager->getConfiguration());

            $attendee = new Attendee();

            $attendee->setUsername($username);
            $attendee->setName($name);
            $attendee->setCreatedBy($createdBy);
            $attendee->setEvent($eventid);

            $entityManager->persist($attendee);
            $entityManager->flush();


//            $attendee = EntityBuilder::newAttendee($name, $createdBy, $username, $eventid);
//            $attendeeService->saveEntity($attendee);

//        }



//        $em = $this->getDoctrine()->getManager();
//        $event = $this->getDoctrine()
//            ->getRepository('AppBundle:Event')
//            ->find(6);
//        $user = $this->getUser();
//        $userService = $this->container->get('userservice');
//        $user1 = $userService->findOneById(['id'=>$userid]);
//        $attendee = EntityBuilder::newAttendee("Burak Ergenc", $user, $user1, $event);
//        $em->persist($attendee);
//        $em->flush();

        return new Response("<html><body>Was successfull</body></html>");
    }

}