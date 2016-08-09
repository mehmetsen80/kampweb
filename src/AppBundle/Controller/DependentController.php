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
use AppBundle\Form\DependentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DependentController extends Controller
{
    /**
     * @Route("/savedependent/attendee/{attendeeId}", name="savedependent")
     */
    public function saveDependent(Request $request, Attendee $attendeeId){

        //get attendee service
        $attendeeService = $this->container->get('attendeeservice');

        //get attendee
        $attendee = $attendeeService->findOneById(['id'=>$attendeeId]);

        $addform = $this->createForm(DependentType::class);

        $addform->handleRequest($request);
        if ($addform->isSubmitted() && $addform->isValid()) {

            // create new dependent
            $dependent = new Dependent();

            $name = $addform->get('name')->getData();
            $gender = $addform->get('gender')->getData();
            $email = $addform->get('email')->getData();
            $age = $addform->get('age')->getData();
            $ccode = $addform->get('ccode')->getData();
            $cellphone = $addform->get('cellphone')->getData();

            $dependent->setAttendee($attendee);
            $dependent->setName($name);
            $dependent->setGender($gender);
            $dependent->setEmail($email);
            $dependent->setAge($age);
            $dependent->setCcode($ccode);
            $dependent->setCellphone($cellphone);

            // get dependent service
            $dependentService = $this->container->get('dependentservice');
            $dependentService->saveEntity($dependent);

            $this->addFlash(
                'dependent',
                'Dependent added successfully'
            );

            return $this->redirect($this->generateUrl('listevents'));

        }

//        $referer = $this->get('request_stack')->getCurrentRequest()
//            ->headers
//            ->get('referer');
//        return $this->redirect($referer.'#attendeeTable');

            return $this->render(':dependents:savedependents.html.twig', array('attendee'=>$attendee, 'addform'=>$addform->createView()));

    }
}