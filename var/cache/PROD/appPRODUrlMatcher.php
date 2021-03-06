<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // testemail
        if ($pathinfo === '/testswiftmailer') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::testswiftmailer',  '_route' => 'testemail',);
        }

        // dashboard
        if ($pathinfo === '/dashboard') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::showDashboardAction',  '_route' => 'dashboard',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // addevent
            if ($pathinfo === '/add-event') {
                return array (  '_controller' => 'AppBundle\\Controller\\EventsController::eventAction',  '_route' => 'addevent',);
            }

            if (0 === strpos($pathinfo, '/api/lucky/number')) {
                // app_lucky_apinumber
                if (rtrim($pathinfo, '/') === '/api/lucky/number') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'app_lucky_apinumber');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\LuckyController::apiNumberAction',  '_route' => 'app_lucky_apinumber',);
                }

                // app_lucky_apinumberactionjson
                if ($pathinfo === '/api/lucky/number/json') {
                    return array (  '_controller' => 'AppBundle\\Controller\\LuckyController::apiNumberActionJson',  '_route' => 'app_lucky_apinumberactionjson',);
                }

            }

        }

        // app_lucky_number
        if ($pathinfo === '/lucky/number') {
            return array (  '_controller' => 'AppBundle\\Controller\\LuckyController::numberAction',  '_route' => 'app_lucky_number',);
        }

        // app_person_createperson
        if ($pathinfo === '/createPerson') {
            return array (  '_controller' => 'AppBundle\\Controller\\PersonController::createPerson',  '_route' => 'app_person_createperson',);
        }

        // app_person_show
        if ($pathinfo === '/show') {
            return array (  '_controller' => 'AppBundle\\Controller\\PersonController::showAction',  '_route' => 'app_person_show',);
        }

        // app_person_listpersons
        if ($pathinfo === '/persons') {
            return array (  '_controller' => 'AppBundle\\Controller\\PersonController::listPersons',  '_route' => 'app_person_listpersons',);
        }

        // csvdownload
        if ($pathinfo === '/users/download/allusers.csv') {
            return array (  '_controller' => 'AppBundle\\Controller\\ReportController::downloadAsCSVAction',  '_route' => 'csvdownload',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/re')) {
            // register
            if ($pathinfo === '/register') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::registerAction',  '_route' => 'register',);
            }

            // passwordreset
            if ($pathinfo === '/reset-password') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::resetPasswordAction',  '_route' => 'passwordreset',);
            }

        }

        if (0 === strpos($pathinfo, '/u')) {
            if (0 === strpos($pathinfo, '/user')) {
                // showusers
                if (0 === strpos($pathinfo, '/users') && preg_match('#^/users/(?P<userid>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'showusers')), array (  '_controller' => 'AppBundle\\Controller\\UserController::showUsersAction',));
                }

                // profile
                if (preg_match('#^/user/(?P<userid>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'profile')), array (  '_controller' => 'AppBundle\\Controller\\UserController::profileAction',));
                }

                // users
                if ($pathinfo === '/users') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::listUsers',  '_route' => 'users',);
                }

            }

            // update
            if ($pathinfo === '/update-info') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::updateAction',  '_route' => 'update',);
            }

        }

        // adduser
        if ($pathinfo === '/add-user') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::addUserAction',  '_route' => 'adduser',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // changepassword
            if ($pathinfo === '/change-password') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::changePasswordAction',  '_route' => 'changepassword',);
            }

            // CreateDependent
            if ($pathinfo === '/create-dependent') {
                return array (  '_controller' => 'AppBundle\\Controller\\PersonController::dependentCreateAction',  '_route' => 'CreateDependent',);
            }

        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
