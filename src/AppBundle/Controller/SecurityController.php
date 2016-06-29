<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 4/28/16
 * Time: 3:06 PM
 */

namespace AppBundle\Controller;

use AppBundle\Entity\PasswordReset;
use AppBundle\Form\ResetPasswordCheckType;
use AppBundle\Form\ResetPasswordType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\UserType;
use AppBundle\Entity\User;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {

        //Check if the user is already authenticated
        if($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirect($this->generateUrl('homepage'));
        }

       $authenticationUtils = $this->get('security.authentication_utils');

        // get the  error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        $this->addFlash(
            'welcome',
            'Welcome back!'
        );

        return $this->render(
            'security/login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error'         => $error,
            )
        );
    }

    /**
     * @Route("/register", name="register")
     */
    public function registerAction(Request $request)
    {
        //Check authentication
        if($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirect($this->generateUrl('homepage'));
        }
        // get the authentication utils
        $authenticationUtils = $this->get('security.authentication_utils');
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        // build the form
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        try {
            // handle the submit (will only happen on POST)
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $user->setRoles(array('ROLE_USER'));
                // Encode the password (you could also do this via Doctrine listener)
                $password = $this->get('security.password_encoder')
                    ->encodePassword($user, $user->getPlainPassword());
                $user->setPassword($password);

                // save the User!
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
                $this->get('security.token_storage')->setToken($token);
                $this->get('session')->set('_security_main', serialize($token));
                // ... do any other work - like sending them an email, etc
                // maybe set a "flash" success message for the user

                $this->addFlash(
                    'success',
                    'Please complete your profile now.'
                );

                $message = \Swift_Message::newInstance()
                    ->setSubject('You have successfully signed up!')
                    ->setFrom('no-reply@kampweb.com')
                    ->setTo($user->getUsername())
                    ->setBody($this->renderView(
                        ':emails:registration.html.twig'),'text/html');
                $this->get('mailer')->send($message);

                return $this->redirectToRoute('update');
            } 
        }
        catch (\Exception $e){

           echo $e->getCode() . ' ' . $e->getMessage();
        }

        return $this->render(
            ':security:register.html.twig',
            array( 'form' => $form->createView(),
                'last_username' => $lastUsername,
                'error' => $error,
                )
        );
    }


    /**
     * @param Request $request
     * @return Response
     * @Route("/request-password", name="resetpasswordrequest")
     */
    public function resetPasswordRequestAction(Request $request)
    {
        if(!is_null($this->getUser())){
            return $this->redirect('/');
        }
        $passwordReset = new PasswordReset();
        $resetform = $this->createForm(ResetPasswordCheckType::class, $passwordReset);
        $resetform->handleRequest($request);
        if ($resetform->isSubmitted() && $resetform->isValid()) {
            $username = $resetform->get('username')->getData();
            $checkusername = $this->getDoctrine()->getRepository('AppBundle:User')->loadUserByUsername($username);
            //Gets the email that is typed in the text-field
            $email = $resetform->get('username')->getData();
            if($checkusername){
                $this->addFlash(
                    'usernamefound',
                    'Your password reset key is on its way. Check your mailbox!'
                );
                $resetCode = bin2hex(openssl_random_pseudo_bytes(24));
                $hashedResetCode = hash('sha512', $resetCode, false);
                $time = new \DateTime();
                $repositoryPasswordReset = $this->getDoctrine()->getRepository('AppBundle:PasswordReset');
                $repositoryPasswordReset->deletePasswordResetsByUser($checkusername);

                $passwordReset->setUser($checkusername);
                $passwordReset->setResetTime($time);
                $passwordReset->setHashedResetCode($hashedResetCode);
                $em = $this->getDoctrine()->getManager();
                $em->persist($passwordReset);
                $em->flush();

                $emailMessage = \Swift_Message::newInstance()
                    ->setSubject('Your password request')
                    ->setFrom('info@kampapp.com')
                    ->setTo($email)
                    ->setBody($this->renderView(':emails:new_password_email.html.twig', array('reseturl' => $this->generateUrl('resetpasswordaction', array('code' => $resetCode), UrlGeneratorInterface::ABSOLUTE_URL))));
                $this->get('mailer')->send($emailMessage);

            }else{
                $this->addFlash(
                    'usernamenotfound',
                    'Oops! Make sure you are using the right email address.'
                );
            }

        }

        return $this->render(':security:resetpasswordrequest.html.twig', array('resetform'=>$resetform->createView()));
    }
    /**
     * @Route("/reset-password/{code}", name="resetpasswordaction")
     */
    public function resetPasswordAction($code,Request $request){
        if(!is_null($this->getUser())){
            return $this->redirect('/');
        }

        $repositoryPasswordReset = $this->getDoctrine()->getRepository('AppBundle:PasswordReset');
        $currentTime = new \DateTime();
        $resetCode = $code;
        $hashedResetCode = hash('sha512', $resetCode, false);

        //Retrieves the PasswordReset object with the hashed reset code
        $passwordReset = $repositoryPasswordReset->findPasswordResetByHashedResetCode($hashedResetCode);

        if (is_null($passwordReset)) {
            //If the resetcode that is provided does not exist in the database, the user is redirected to home
            return $this->redirect('/');
        }

        //Finds the user based on the provided reset code.
        $user = $passwordReset->getUser();

        $resetform = $this->createForm(ResetPasswordType::class);
        $resetform->handleRequest($request);

        //Finds the time difference from when the resetcode was collected, and now.
        $timeDifference = date_diff($passwordReset->getResetTime(), $currentTime);

        if($timeDifference->i < 15){

            if ($resetform->isSubmitted() && $resetform->isValid()) {

                $repositoryPasswordReset->deletePasswordResetByHashedResetCode($hashedResetCode);
                $plainPassword = $resetform->get('plainPassword')->getData();
                $hashedPassword = md5($plainPassword);
                $user->setPassword($hashedPassword);

                //Update the database
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                //Render the login page
                return $this->redirectToRoute('login');
            }

        }
        else{
            //Delete the resetcode
            $repositoryPasswordReset->deletePasswordResetByHashedResetCode($hashedResetCode);
            //creates a message that states the problem
            $feedback = 'Your password reset code is expired. Please make a new request.';
            //Render the reset_password twig with the message, so the user can get a new reset code.
            return $this->renderView(':security:resetpasswordrequest.html.twig', array('message'=>$feedback));
        }
        return $this->render(':security:resetpassword.html.twig', array('resetCode'=>$resetCode, 'resetform'=>$resetform->createView()));

    }
    

  

       
}