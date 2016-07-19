<?php
/**
 * Created by PhpStorm.
 * User: muhammetergenc
 * Date: 6/1/16
 * Time: 9:59 AM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Event;
use AppBundle\Form\Events\AddEventType;
use AppBundle\Form\Events\EditEventType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EventsController extends Controller
{
    /**
     * @Route("/delete-event/{id}", name="deleteevent")
     */
    public function deleteEventAction($id){

        $event = $this->getDoctrine()->getRepository('AppBundle:Event')
            ->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($event);
        $em->flush();

        return $this->redirect($this->generateUrl('listevents'));
    }

    /**
     * @Route("/events", name="listevents")
     */
    public function listEventsAction(Request $request){
        $event = new Event();
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $events = $em->getRepository('AppBundle:Event')->findAll();
        $eventform = $this->createForm(AddEventType::class);
        $eventform->handleRequest($request);
        if ($eventform->isSubmitted() && $eventform->isValid()) {
            $name = $eventform->get('name')->getData();
            $startDate = $eventform->get('startDate')->getData();
            $endDate = $eventform->get('endDate')->getData();
            $description = $eventform->get('description')->getData();
            $event->setName($name);
            $event->setStartDate($startDate);
            $event->setEndDate($endDate);
            $event->setDescription($description);
            $event->setCreatedBy($user);

            $this->addFlash(
                'eventsuccess',
                'You have successfully created an event!'
            );
            $em->persist($event);
            $em->flush();
            return $this->redirect($this->generateUrl('listevents'));

        }
        return $this->render(':events:eventslist.html.twig', array('eventform' => $eventform->createView(), 'events'=>$events));
    }

    /**
     * @Route("/events/{eventid}", name="showevents")
     */
    public function showUsersAction($eventid){
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository('AppBundle:Event')->find(['id'=>$eventid]);
        return $this->render(':events:show.html.twig', ['event'=>$event]);
    }


    /**
     * @Route("/edit-event/{eventid}", name="edit-event")
     */
    public function editUserAction(Request $request ,$eventid){
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository('AppBundle:Event')->find(['id'=>$eventid]);
        $editform = $this->createForm(EditEventType::class, $event);
        $editform->handleRequest($request);
        if ($editform->isSubmitted() && $editform->isValid()) {
            $name = $editform->get('name')->getData();
            $startDate = $editform->get('startDate')->getData();
            $endDate = $editform->get('endDate')->getData();
            $description = $editform->get('description')->getData();
            if (!empty($name)) {
                $event->setName($name);
            }
            else{
                $event->setName($event->getName());
            }
            if (!empty($startDate)) {
                $event->setStartDate($startDate);
            }
            else{
                $event->setStartDate($event->getStartDate());
            }
            if (!empty($endDate)) {
                $event->setEndDate($endDate);
            }
            else{
                $event->setEndDate($event->getEndDate());
            }
            if(!empty($description)){

                $event->setDescription($description);
            }
            else{
                $event->setDescription($event->getDescription());
            }

            $em->persist($event);
            $em->flush();
            $this->addFlash(
                'eventupdatesuccess',
                'Your update was successful!'
            );
        }
        if ($editform->isSubmitted() && ($editform->isValid() == False)) {
            $this->addFlash(
                'eventupdateerror',
                'Oops! There was a problem with your update!'
            );
        }
        return $this->render(':events:editevent.html.twig', array('event'=>$event, 'editform' => $editform->createView()));
    }





}