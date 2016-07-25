<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    /**
     * @Route("/parallax")
     */
    public  function phpMyAdmin(){

        return $this->render('parallax/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }


    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function showDashboardAction(){

        $logger = $this->get('logger');
        $logger->debug('I am the debug', array('route' => 'dashboard'));

        $user = $this->getUser();
        $currentpassword = $user->getPassword();
        if($currentpassword == md5(1234)){

            return $this->redirect($this->generateUrl('changepassword'));
        }

        $eventService = $this->get('eventservice');
        $userService = $this->get('userservice');
        $events = $eventService->findAll();
        $users = $userService->findAll();
        $male = $this->getDoctrine()->getRepository('AppBundle:User')->loadByMaleGender();
        $female = $this->getDoctrine()->getRepository('AppBundle:User')->loadByFemaleGender();
        $adult = $this->getDoctrine()->getRepository('AppBundle:User')->loadByAdultAge();
        $youth = $this->getDoctrine()->getRepository('AppBundle:User')->loadByYouthAge();
        $student = $this->getDoctrine()->getRepository('AppBundle:User')->loadByStudent();

        return $this->render(":user:dashboard.html.twig", array('events'=>$events, 'users'=>$users, 'male' => $male, 'female' => $female, 'adult' => $adult, 'youth' => $youth, 'student'=>$student));

    }


}
