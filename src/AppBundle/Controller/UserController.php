<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 5/18/16
 * Time: 5:00 PM
 */

namespace AppBundle\Controller;

use AppBundle\Form\ChangeInfoType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class UserController extends Controller
{

//    /**
//     * @Route("/saveuser")
//     */
//    public function load(){
//        $user = new User();
//        $user->setUsername('admin1@gmail.com');
//        $user->setFullname('Admin User');
//        $user->setPassword(md5('password'));
//        $user->setRoles(array('ROLE_SUPER_ADMIN'));
//        $em = $this->getDoctrine()->getManager();
//        $em->persist($user);
//        $em->flush();
//        return new Response('<html><body>Admin User Created!</body></html>');
//    }

    /**
     * @Route("/users/{userid}", name="showusers")
     *
     */
    public function showUsersAction($userid){
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:User')->findOneBy(['id'=>$userid]);


        return $this->render('/user/show.html.twig',[
            'user'=>$users,
        ]);
    }

    /**
     * @Route("/users",name="users")
     */
    public function listUsers(){
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:User')->findAll();
        return $this->render('user/list.html.twig', [
            'users' => $users,
        ]);
    }

//    /**
//     * @Route("/update-info", name="update")
//     */
//    public function updateAction($userid){
//
//        $em = $this->getDoctrine()->getManager();
//        $user = $em->getRepository('AppBundle:User')->find($userid);
//        $form = $this->createForm(new ChangeInfoType(), $user);
//        $request = $this->get('request');
//        $form->handleRequest($request);
//        if ($form->isSubmitted() && $form->isValid()) {
//            $newfullname = $user->getNewfullname();
//            $newusername = $user->getNewusername();
//            $user->setFullname($newfullname);
//            $user->setUsername($newusername);
//            $em->flush();
//            return $this->redirect($this->generateUrl('users'));
//        }
//
//        if(!$user){
//            throw $this->createNotFoundException(
//                'No user found for id '.$userid
//            );
//        }
//        return $this->render('user/
//update.html.twig',[
//            'user' => $user,
//        ]);
//    }

        /**
     * @Route("/update-info", name="update")
     */
    public function updateAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $updateform = $this->createForm(ChangeInfoType::class);
        $updateform->handleRequest($request);
        if ($updateform->isSubmitted() && $updateform->isValid()) {
            $newfullname = $updateform->get('newfullname')->getData();
            $newusername = $updateform->get('newusername')->getData();
            $newpassword = $updateform->get('newpassword')->getData();
            if(!empty($newfullname)) {
                $user->setFullname($newfullname);
            }
            if(!empty($newusername)) {
                $user->setUsername($newusername);
            }
            if(!empty($newpassword)) {
                $user->setPassword(md5($newpassword));
            }

            $em->persist($user);
            $em->flush();
            $this->addFlash(
                'updatesuccess',
                'You have successfully updated your profile!'
            );
            return $this->redirect($this->generateUrl('update'));
        }elseif($updateform->isSubmitted() && !$updateform->isValid()){
            $this->addFlash(
                'updateerror',
                'Oops! There was an error with your update!'
            );
        }

        return $this->render('user/update.html.twig',array('form1' => $updateform->createView()));
    }



}