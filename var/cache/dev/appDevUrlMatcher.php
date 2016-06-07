<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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
