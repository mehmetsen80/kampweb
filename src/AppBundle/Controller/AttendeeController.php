<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 7/26/16
 * Time: 12:09 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Attendee;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AttendeeController extends Controller
{
    /**
     * @Route("/attendee/{userid}/event/{eventid}", name="addattendees")
     */
    public function saveAttendee(Request $request, $userid, $eventid){

        $response = new Response();

        $createdBy = $this->getUser();
        //get user service
        $userService = $this->container->get('userservice');

        //get user
        $user = $userService->findOneById(['id'=>$userid]);

        //get event service
        $eventservice = $this->container->get('eventservice');

        //get attendee service
        $attendeeService = $this->container->get('attendeeservice');

        //get event
        $event = $eventservice->findOneById(['id'=>$eventid]);

        $attendee = new Attendee();

        $attendee->setUserid($user->getId());
        $attendee->setName($user->getFullname());
        $attendee->setCreatedBy($createdBy);
        $attendee->setEvent($event);

        $attendeeService->saveEntity($attendee);

        $this->addFlash(
            'attendeesuccess',
            'Attendee added successfully'
        );

        $referer = $this->get('request_stack')->getCurrentRequest()
            ->headers
            ->get('referer');
        return $this->redirect($referer.'#attendeeTable');
    }

}