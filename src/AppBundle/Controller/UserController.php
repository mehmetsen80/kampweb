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
use AppBundle\Form\NewUserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;


class UserController extends Controller
{

    /**
     * @Route("/users/{userid}", name="showusers")
     *
     */
    public function showUsersAction($userid){
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:User')->find(['id'=>$userid]);
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
        $user = $this->getUser();
        $currentpassword = $user->getPassword();
        if($currentpassword == md5(1234)){
            return $this->redirect($this->generateUrl('changepassword'));
        }
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
//        throw new \Exception('Something went wrong!');
//        throw new AccessDeniedHttpException;
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $updateform = $this->createForm(ChangeInfoType::class, $user);
        $updateform->handleRequest($request);
        if ($updateform->isSubmitted() && $updateform->isValid()) {
            $ccode = $updateform->get('ccode')->getData();
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
                $cellphone =  preg_replace("/[^0-9A-Za-z]/", "", $cellphone);
                $user->setCellphone($cellphone);
            }
            else{
                $user->setCellphone($user->getCellphone());
            }
            if(!empty($ccode)){
                $ccode = preg_replace("/[^0-9A-Za-z]/", "", $ccode);
                $user->setCcode($ccode);
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
        $currentpassword = $user->getPassword();
        if($currentpassword == md5(1234)){
            return $this->redirect($this->generateUrl('changepassword'));
        }

            return $this->render('user/update.html.twig', array('form1' => $updateform->createView()));
        }

    /**
     * @Route("/add-user", name="adduser")
     */
    public function addUserAction(Request $request){
        $user = new User();
        $addform = $this->createForm(NewUserType::class,$user);
        $addform->handleRequest($request);
        if ($addform->isSubmitted() && $addform->isValid()) {
            $user->setRoles(array('ROLE_USER'));
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
            $cellphone = $addform->get('cellphone')->getData();
            $ccode = $addform->get('ccode')->getData();
            $cellphone =  preg_replace("/[^0-9A-Za-z]/", "", $cellphone);
            $ccode =  preg_replace("/[^0-9A-Za-z]/", "", $ccode);
            $user->setCcode($ccode);
            $user->setCellphone($cellphone);
            $user->setPlainPassword(1234);
            $user->setPassword(md5(1234));
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->addFlash(
                'addeduser',
                'You successfully added a user to the database'
            );
        }
        elseif($addform->isSubmitted() && !$addform->isValid()){
                $this->addFlash(
                    'addusererror',
                    'Oops! There was an error!'
                );
            return $this->redirect($this->generateUrl('adduser'));
            }
        return $this->render(':user:adduser.html.twig', array('addform'=>$addform->createView()));
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

        $currentpassword = $user->getPassword();
        if($currentpassword == md5(1234)){
            $this->addFlash(
                'passwordchange',
                'Please change it now to keep your information protected.'
            );
        }
        return $this->render(':Security:changepassword.html.twig',array('passwordform' => $passwordform->createView()));
    }







}