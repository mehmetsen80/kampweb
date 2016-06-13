<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 4/28/16
 * Time: 3:06 PM
 */

namespace AppBundle\Controller;


use AppBundle\Form\ChangePassword;
use AppBundle\Form\ChangePasswordType;
use AppBundle\Form\ResetPasswordCheckType;
use AppBundle\Form\ResetPasswordType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\UserType;
use AppBundle\Entity\User;
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

        // get the login error if there is one
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
     * @Route("/reset-password/", name="resetpasswordrequest")
     */
    public function resetPasswordRequestAction(Request $request)
    {
        $resetform = $this->createForm(ResetPasswordCheckType::class);
        $resetform->handleRequest($request);
        if ($resetform->isSubmitted() && $resetform->isValid()) {
            $username = $resetform->get('username')->getData();
            $checkusername = $this->getDoctrine()->getRepository('AppBundle:User')->loadUserByUsername($username);

            if($checkusername){
                $this->addFlash(
                    'usernamefound',
                    'Your password reset link is on its way. Check your mailbox!'
                );
                $salt = "498#2D83B631%3800EBD!801600D*7E3CC13";
                $password = md5($salt.$checkusername);
                $pwurl = $this->generateUrl('passwordreset', array('password'=>$password));
            }else{
                $this->addFlash(
                    'usernamenotfound',
                    'Oops! We could not find your email address in the system. Are you sure that you are using the right email address?'
                );
            }

        }

        return $this->render(':Security:resetpasswordrequest.html.twig', array('resetform'=>$resetform->createView()));
    }
    /**
     * @Route(name="resetpasswordaction")
     */
    public function resetPasswordAction(Request $request){
        $resetform = $this->createForm(ResetPasswordType::class);
        $resetform->handleRequest($request);
        if ($resetform->isSubmitted() && $resetform->isValid()) {

//            return $this->redirect($this->generateUrl('login'));

        }
        elseif($resetform->isSubmitted() && !$resetform->isValid()){
            $this->addFlash(
                'addusererror',
                'Oops! There was an error!'
            );
        }
        return $this->render(':Security:resetpassword.html.twig', array('resetform'=>$resetform->createView()));

    }
    

  

       
}