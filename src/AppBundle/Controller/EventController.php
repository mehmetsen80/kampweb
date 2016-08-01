<?php
/**
 * Created by PhpStorm.
 * User: muhammetergenc
 * Date: 6/1/16
 * Time: 9:59 AM
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Attendee;
use AppBundle\Form\Events\AddEventType;
use AppBundle\Util\EntityBuilder;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Services\EventService as eventService;

class EventController extends Controller
{
    /**
     * @Route("/delete-event/{id}", name="deleteevent")
     */
    public function deleteEventAction($id){

        $eventservice = $this->container->get('eventservice');
        $eventservice->removeById($id);

        return $this->redirect($this->generateUrl('listevents'));
    }

    /**
     * @Route("/events/add-event", name="addevent")
     */
    public function addEventAction(Request $request){
        //get event service
        $eventService = $this->container->get('eventservice');
        //get user
        $user = $this->getUser();
        //create form
        $eventform = $this->createForm(AddEventType::class);
        //handle form
        $eventform->handleRequest($request);

        //if form is submitted
        if ($eventform->isSubmitted() && $eventform->isValid()) {

            //get form elements
            $name = $eventform->get('name')->getData();
            $startDate = $eventform->get('startDate')->getData();
            $endDate = $eventform->get('endDate')->getData();
            $description = $eventform->get('description')->getData();
            //new event
            $event = EntityBuilder::newEvent($name, $startDate, $endDate, $description, $user);
            //save event
            $event = $eventService->saveEntity($event);

            //if event saved succcessfully show flash message
            if(!is_null($event)){
                $this->addFlash(
                    'eventsuccess',
                    'Event created successfully !'
                );
            }
            return $this->redirect($this->generateUrl('listevents'));
        }
        return $this->render(':events:addanevent.html.twig', array('eventform' => $eventform->createView()));
    }


    /**
     * @Route("/events", name="listevents")
     */
    public function listEventsAction(Request $request){

        //get event service
        $eventService = $this->container->get('eventservice');

        //get all events by default
        $events = $eventService->findAll();

        return $this->render(':events:eventslist.html.twig', array('events'=>$events));
    }


    /**
     * @Route("/events/{eventid}", name="showevents")
     */
    public function showEventsAction($eventid){

        //get event service
        $eventService = $this->container->get('eventservice');

        $userService = $this->container->get('userservice');

        //get event
        $event = $eventService->findOneById(['id'=>$eventid]);

        $users = $userService->findAll();

        //get userid
        $userid = $userService->findOneById(['id']);

        return $this->render(':events:show.html.twig', ['event'=>$event, 'users'=>$users, 'userid'=>$userid]);

    }

    /**
     * @Route("/edit-event/{eventid}", name="edit-event")
     */
    public function editEventAction(Request $request ,$eventid){

        //get user service
        $userService = $this->container->get('userservice');

        //get event service
        $eventservice = $this->container->get('eventservice');

        $createdBy = $userService->findOneById(4);

        //get user
        $user = $userService->findOneById(6);

        //get event
        $event = $eventservice->findOneById(8);

        $attendee = new Attendee();
        $attendee->setUsername($user->getUsername());
        $attendee->setEvent($event);
        $attendee->setName($user->getFullname());
        $attendee->setCreatedBy($createdBy);

        $this->entityManager->persist($attendee);
        $this->entityManager->flush($attendee);
    }


}