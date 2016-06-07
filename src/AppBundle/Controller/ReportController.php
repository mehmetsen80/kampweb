<?php
/**
 * Created by PhpStorm.
 * User: muhammetergenc
 * Date: 6/3/16
 * Time: 10:45 AM
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ReportController extends Controller
{
    /**
     * @Route("/users/download/allusers.csv",name="csvdownload")
     */
    public function downloadAsCSVAction(){
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:User')->findAll();
        $rows = array();
        foreach ($users as $user){
            $data = array(
                $user->getID(),
                $user->getFullname(),
                $user->getUsername(),
                $user->getGender(),
                $user->getCellphone(),
            );
            $rows[] = implode(', ', $data);
        }

        $content = implode("\n", $rows);
        $response = new Response($content);
        $response->headers->set('Content-Type', 'text/csv');

        return $response;
    }

}