<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        if($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('dashboard'));
        }
        //echo "hello world";
        // replace this example code with whatever you need
        return $this->render('::landing.html.twig');
    }

    public  function phpMyAdmin(){

        return $this->render('parallax/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/testswiftmailer", name="testemail")
     */
    public function testswiftmailer(){

        $message = \Swift_Message::newInstance()
            ->setSubject('Sample Subject')
            ->setFrom('mergenc@na.edu')
            ->setTo('send@example.com')
            ->setBody('Hello World', 'text/plain');
        $this->get('mailer')->send($message);
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function showDashboardAction(){
        $user = $this->getUser();
        $currentpassword = $user->getPassword();
        if($currentpassword == md5(1234)){

            return $this->redirect($this->generateUrl('changepassword'));
        }
        return $this->render(':user:dashboard.html.twig');

    }


}
