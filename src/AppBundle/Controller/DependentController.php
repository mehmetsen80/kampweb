<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 7/26/16
 * Time: 12:09 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Attendee;
use AppBundle\Entity\Dependent;
use AppBundle\Entity\Event;
use AppBundle\Form\DependentType;
use AppBundle\Util\EntityBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DependentController extends Controller
{
    /**
     * @Route("/savedependent/attendee/{attendeeId}/event/{eventid}", name="savedependent")
     */
    public function saveDependent(Request $request, Attendee $attendeeId, Event $eventid){

        //get attendee service
        $attendeeService = $this->container->get('attendeeservice');

        //get attendee service
        $eventService = $this->container->get('eventservice');

        $event = $eventService->findOneById((['id'=>$eventid]));

        //get attendee
        $attendee = $attendeeService->findOneById(['id'=>$attendeeId]);

        // get dependent service
        $dependentService = $this->container->get('dependentservice');

        $dependents = $attendee->getDependents();

        $addform = $this->createForm(DependentType::class);

        $addform->handleRequest($request);
        if ($addform->isSubmitted() && $addform->isValid()) {

            $name = $addform->get('name')->getData();
            $gender = $addform->get('gender')->getData();
            $email = $addform->get('email')->getData();
            $age = $addform->get('age')->getData();
            $ccode = $addform->get('ccode')->getData();
            $cellphone = $addform->get('cellphone')->getData();

            $dependent = EntityBuilder::newDependent($attendee, $name, $email, $gender, $age, $ccode, $cellphone);

            $dependentService->saveEntity($dependent);

            $this->addFlash(
                'dependent',
                'Dependent added successfully. '
            );

            $referer = $this->get('request_stack')->getCurrentRequest()->headers->get('referer');
            return $this->redirect($referer);

        }

            return $this->render(':dependents:savedependents.html.twig', array('attendee'=>$attendee, 'event'=>$eventid, 'dependents'=>$dependents, 'addform'=>$addform->createView()));
    }

    /**
     * @Route("/delete-dependent/{id}", name="deletedependent")
     */
    public function deleteDependentAction($id){

        $dependentService = $this->container->get('dependentservice');

        $dependentService->removeById($id);

        $this->addFlash(
            'dependentdelete',
            'Dependent deleted successfully. '
        );

        $referer = $this->get('request_stack')->getCurrentRequest()->headers->get('referer');
        return $this->redirect($referer);

    }
}