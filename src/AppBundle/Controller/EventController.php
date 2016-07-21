<?php
/**
 * Created by PhpStorm.
 * User: muhammetergenc
 * Date: 6/1/16
 * Time: 9:59 AM
 */

namespace AppBundle\Controller;

use AppBundle\Form\Events\AddEventType;
use AppBundle\Form\Events\EditEventType;
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
     * @Route("/events", name="listevents")
     */
    public function listEventsAction(Request $request){

        //get event service
        $eventservice = $this->container->get('eventservice');
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
            $event = $eventservice->saveEntity($event);

            //if event saved succcessfully show flash message
            if(!is_null($event)){
                $this->addFlash(
                    'eventsuccess',
                    'Event created successfully !'
                );
            }
            return $this->redirect($this->generateUrl('listevents'));
        }
        //get all events by default
        $events = $eventservice->findAll();

        return $this->render(':events:eventslist.html.twig', array('eventform' => $eventform->createView(), 'events'=>$events));
    }


    /**
     * @Route("/events/{eventid}", name="showevents")
     */
    public function showEventsAction($eventid){
        $event = $this->container->get('eventservice')->findOneById(['id'=>$eventid]);
        return $this->render(':events:show.html.twig', ['event'=>$event]);

    }


    /**
     * @Route("/edit-event/{eventid}", name="edit-event")
     */
    public function editEventAction(Request $request ,$eventid){

        //get event service
        $eventservice = $this->container->get('eventservice');
        $event = $eventservice->findOneById(['id'=>$eventid]);
        $editform = $this->createForm(EditEventType::class, $event);
        $editform->handleRequest($request);

        if ($editform->isSubmitted() && $editform->isValid()) {
            $name = $editform->get('name')->getData();
            $startDate = $editform->get('startDate')->getData();
            $endDate = $editform->get('endDate')->getData();
            $description = $editform->get('description')->getData();

            //set properties
            $event->setName($name);
            $event->setStartDate($startDate);
            $event->setEndDate($endDate);
            $event->setDescription($description);

            //save event
            $event = $eventservice->saveEntity($event);

            //if event saved succcessfully show flash message
            if(!is_null($event)){
                $this->addFlash(
                    'eventupdatesuccess',
                    'Update was successful'
                );
            }
            else{
                $this->addFlash(
                    'eventupdateerror',
                    'Oops! There was a problem with your update!'
                );
            }
        }

        return $this->render(':events:editevent.html.twig', array('event'=>$event, 'editform' => $editform->createView()));
    }

}