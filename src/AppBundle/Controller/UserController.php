<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 5/18/16
 * Time: 5:00 PM
 */

namespace AppBundle\Controller;

use AppBundle\Form\ChangeInfoType;
use AppBundle\Form\ChangePasswordType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class UserController extends Controller
{

    /**
     * @Route("/users/{userid}", name="showusers")
     *
     */
    public function showUsersAction($userid){
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:User')->findOneBy(['id'=>$userid]);


        return $this->render('/user/show.html.twig',[
            'user'=>$user,

        ]);
    }
    /**
     * @param $userid
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/user/{userid}", name="profile")
     */
    public function profileAction($userid){
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:User')->find(['id'=>$userid]);
        return $this->render(':user:profile.html.twig',['user'=>$user]);
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


    /**
     * @Route("/update-info", name="update")
     */
    public function updateAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $updateform = $this->createForm(ChangeInfoType::class, $user);
        $updateform->handleRequest($request);
        if ($updateform->isSubmitted() && $updateform->isValid()) {
            $newfullname = $updateform->get('fullname')->getData();
            $newusername = $updateform->get('username')->getData();
            $cellphone = $updateform->get('cellphone')->getData();
            $birthdate = $updateform->get('birthday')->getData();
            $gender = $updateform->get('gender')->getData();
            if (!empty($newfullname)) {
                $user->setFullname($newfullname);
            }
            else{
                $user->setFullname($user->getFullname());
            }
            if (!empty($newusername)) {
                $user->setUsername($newusername);
            }
            else{
                $user->setUsername($user->getUsername());
            }
            if (!empty($cellphone)) {
                $user->setCellphone($cellphone);
            }
            else{
                $user->setCellphone($user->getCellphone());
            }
            if (!empty($birthdate)) {
                $user->setBirthDay($birthdate);
            }
            else{
                $user->setBirthDay($user->getBirthday());
            }
            if (!empty($gender)) {
                $user->setGender($gender);
            }
            else {
                $user->setGender($user->getGender());
            }
            $em->persist($user);
            $em->flush();
            $this->addFlash(
                'updatesuccess',
                'You have successfully updated your profile!'
            );
            return $this->redirect($this->generateUrl('update'));
        }
        elseif($updateform->isSubmitted() && !$updateform->isValid()){
                $this->addFlash(
                    'updateerror',
                    'Oops! There was an error with your update!'
                );
            }
            return $this->render('user/update.html.twig', array('form1' => $updateform->createView()));
        }

    /**
     * @Route("/change-password", name="changepassword")
     */
    public function changePasswordAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $passwordform = $this->createForm(ChangePasswordType::class);
        $passwordform->handleRequest($request);
        $newpassword = $passwordform->get('newpassword')->getData();
        $oldpassword = $user->getPassword();
        $oldrepeat = md5($passwordform->get('oldPassword')->getData());
        if ($passwordform->isSubmitted() && $passwordform->isValid()) {
            if(!empty($newpassword) and $oldpassword == $oldrepeat) {
                $user->setPassword(md5($newpassword));
                $this->addFlash(
                    'updatesuccess',
                    'You have successfully updated your password!'
                );
            }

            $em->persist($user);
            $em->flush();
        if($oldpassword != $oldrepeat){
                $this->addFlash(
                    'updateerror',
                    'Oops! There was an error with your update! Please double check your current password. '
                );
            }
            return $this->redirect($this->generateUrl('changepassword'));
        }

        return $this->render(':Security:changepassword.html.twig',array('passwordform' => $passwordform->createView()));
    }







}