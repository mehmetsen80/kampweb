<?php
/**
 * Created by PhpStorm.
 * User: muhammetergenc
 * Date: 6/1/16
 * Time: 9:59 AM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventsController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/add-event", name="addevent")
     */
    public function addEventAction(){
        return $this->render(':events:edit.html.twig');
    }

    /**
     * @Route("/events", name="listevents")
     */
    public function listEventsAction(){
        return $this->render(':events:eventslist.html.twig');
    }

    /**
     * @Route("/attendees", name="attendees")
     */
    public function listAttendeesAction(){
        return $this->render(':events:attendeeslist.html.twig');
    }


}