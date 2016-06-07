<?php

/* ::default.html.twig */
class __TwigTemplate_16f3c7f32b2f32c354dd629fa054a972c505d2ec157f2e87dbde098716903201 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'topbar' => array($this, 'block_topbar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2f32b9baf8845ca5dc003143ca4e28b9c344869f82ff111081464ea74611c4f = $this->env->getExtension("native_profiler");
        $__internal_b2f32b9baf8845ca5dc003143ca4e28b9c344869f82ff111081464ea74611c4f->enter($__internal_b2f32b9baf8845ca5dc003143ca4e28b9c344869f82ff111081464ea74611c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::default.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"author\" content=\"North American University\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
</head>

";
        // line 29
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 30
        echo "<!-- Start: Main -->
<div id=\"main\">
    <!-- Start: Header -->
    ";
        // line 33
        $this->displayBlock('header', $context, $blocks);
        // line 96
        echo "    <!-- End: Header -->
    <!-- Start: Sidebar Left -->
    ";
        // line 98
        $this->displayBlock('sidebar', $context, $blocks);
        // line 180
        echo "    ";
        $this->displayBlock('topbar', $context, $blocks);
        // line 236
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 237
        echo "    <!-- BEGIN: PAGE SCRIPTS -->
    ";
        // line 238
        $this->displayBlock('javascripts', $context, $blocks);
        // line 293
        echo "</div>


</html>
";
        
        $__internal_b2f32b9baf8845ca5dc003143ca4e28b9c344869f82ff111081464ea74611c4f->leave($__internal_b2f32b9baf8845ca5dc003143ca4e28b9c344869f82ff111081464ea74611c4f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_978471ff388cd26961be56a5d14e66cfce27007bd5ab3c6d035772586e77320a = $this->env->getExtension("native_profiler");
        $__internal_978471ff388cd26961be56a5d14e66cfce27007bd5ab3c6d035772586e77320a->enter($__internal_978471ff388cd26961be56a5d14e66cfce27007bd5ab3c6d035772586e77320a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "North American University";
        
        $__internal_978471ff388cd26961be56a5d14e66cfce27007bd5ab3c6d035772586e77320a->leave($__internal_978471ff388cd26961be56a5d14e66cfce27007bd5ab3c6d035772586e77320a_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4ecbd3cd89e396432abdab0d5209357c885b05b89ad80486c77fc67898267672 = $this->env->getExtension("native_profiler");
        $__internal_4ecbd3cd89e396432abdab0d5209357c885b05b89ad80486c77fc67898267672->enter($__internal_4ecbd3cd89e396432abdab0d5209357c885b05b89ad80486c77fc67898267672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>
        <link rel='stylesheet' type='text/css' href='";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/skin/base/fonts/admindesigns.less"), "html", null, true);
        echo "'>
        <!-- Font CSS -->
        <link rel='stylesheet' type='text/css' href='";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/fonts/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "'>
        <!-- Theme CSS -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/skin/default_skin/css/theme.css"), "html", null, true);
        echo "\">
        <!-- Admin Forms CSS -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin-tools/admin-forms/css/admin-forms.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_4ecbd3cd89e396432abdab0d5209357c885b05b89ad80486c77fc67898267672->leave($__internal_4ecbd3cd89e396432abdab0d5209357c885b05b89ad80486c77fc67898267672_prof);

    }

    // line 33
    public function block_header($context, array $blocks = array())
    {
        $__internal_c751dae6096a31936fa14fcfb1c00e037dda7104976e86683a35d4bb4caf7257 = $this->env->getExtension("native_profiler");
        $__internal_c751dae6096a31936fa14fcfb1c00e037dda7104976e86683a35d4bb4caf7257->enter($__internal_c751dae6096a31936fa14fcfb1c00e037dda7104976e86683a35d4bb4caf7257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 34
        echo "        <header class=\"navbar navbar-fixed-top bg-dark\">
            <div class=\"navbar-branding\">
                ";
        // line 36
        if (((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array())) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array())))) {
            // line 37
            echo "                    <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('routing')->getPath("update");
            echo "\">
                        <b>Kamp</b>Web
                    </a>
                ";
        } else {
            // line 41
            echo "                    <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('routing')->getPath("dashboard");
            echo "\">
                        <b>Kamp</b>Web
                    </a>
                ";
        }
        // line 45
        echo "                <span id=\"toggle_sidemenu_l\" class=\"ad ad-lines\"></span>
            </div>
            <ul class=\"nav navbar-nav navbar-left\">

                <li>
                    <a class=\"topbar-menu-toggle\" href=\"#\">
                        <span class=\"ad ad-wand fs16\"></span>
                    </a>
                </li>

            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle fw600 p15\" data-toggle=\"dropdown\">  ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "fullname", array()), "html", null, true);
        echo "
                        <span class=\"caret caret-tp hidden-xs\"></span>
                    </a>
                    <ul class=\"dropdown-menu list-group dropdown-persist w250\" role=\"menu\">
                        <li class=\"list-group-item\">
                            ";
        // line 63
        if (((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array())) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array())))) {
            // line 64
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("update");
            echo "\" class=\"animated animated-short fadeInUp\">
                                    <span class=\"fa fa-user\"></span> My Profile  </a>
                                </a>
                            ";
        } else {
            // line 68
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profile", array("userid" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\" class=\"animated animated-short fadeInUp\">
                                    <span class=\"fa fa-user\"></span> My Profile  </a>
                                </a>
                            ";
        }
        // line 72
        echo "                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("update");
        echo "\" class=\"animated animated-short fadeInUp\">
                                <span class=\"fa fa-gear\"></span> Edit Profile </a>
                        </li>
                        <li class=\"list-group-item\">
                            ";
        // line 78
        if (((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array())) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array())))) {
            // line 79
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("update");
            echo "\" class=\"animated animated-short fadeInUp\">
                                    <span class=\"fa fa-shield\"></span> Change Password  </a>
                            ";
        } else {
            // line 82
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("changepassword");
            echo "\" class=\"animated animated-short fadeInUp\">
                                    <span class=\"fa fa-shield\"></span> Change Password  </a>
                            ";
        }
        // line 85
        echo "                        </li>
                        <li class=\"dropdown-footer\">
                            <a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" class=\"\">
                                <span class=\"fa fa-power-off pr5\"></span> Logout </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </header>
    ";
        
        $__internal_c751dae6096a31936fa14fcfb1c00e037dda7104976e86683a35d4bb4caf7257->leave($__internal_c751dae6096a31936fa14fcfb1c00e037dda7104976e86683a35d4bb4caf7257_prof);

    }

    // line 98
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_80f957350a3a9788259cd79186670698a80dbe69062ffda7f699f48dfa6f641b = $this->env->getExtension("native_profiler");
        $__internal_80f957350a3a9788259cd79186670698a80dbe69062ffda7f699f48dfa6f641b->enter($__internal_80f957350a3a9788259cd79186670698a80dbe69062ffda7f699f48dfa6f641b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 99
        echo "        <aside id=\"sidebar_left\" class=\"nano nano-primary affix\">

            <!-- Start: Sidebar Left Content -->
            <div class=\"sidebar-left-content nano-content\">

                <!-- Start: Sidebar Left Menu -->
                <ul class=\"nav sidebar-menu\">
                    <li class=\"sidebar-label pt20\">Menu</li>
                    <li>
                        ";
        // line 108
        if (((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array())) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array())))) {
            // line 109
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("update");
            echo "\">
                            <span class=\"glyphicon glyphicon-home\"></span>
                            <span class=\"sidebar-title\">Dashboard</span>
                        </a>
                        ";
        } else {
            // line 114
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("dashboard");
            echo "\">
                            <span class=\"glyphicon glyphicon-home\"></span>
                            <span class=\"sidebar-title\">Dashboard</span>
                        </a>
                        ";
        }
        // line 119
        echo "                    </li>
                    <li>
                        ";
        // line 121
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 122
            echo "                            ";
            if (((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array())) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array())))) {
                // line 123
                echo "                            <a href=\"";
                echo $this->env->getExtension('routing')->getPath("update");
                echo "\">
                                    <span class=\"fa fa-users\"></span>
                                    <span class=\"sidebar-title\">Users</span>
                            </a>
                            ";
            } else {
                // line 128
                echo "                            <a href=\"";
                echo $this->env->getExtension('routing')->getPath("users");
                echo "\">
                                <span class=\"fa fa-users\"></span>
                                <span class=\"sidebar-title\">Users</span>
                            </a>
                            ";
            }
            // line 133
            echo "                        ";
        }
        // line 134
        echo "                    </li>
                    <li>
                        ";
        // line 136
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 137
            echo "                            ";
            if (((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array())) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array())))) {
                // line 138
                echo "                            <a href=\"";
                echo $this->env->getExtension('routing')->getPath("update");
                echo "\">
                                <span class=\"fa fa-calendar\"></span>
                                <span class=\"sidebar-title\">Events</span>
                            </a>
                            ";
            } else {
                // line 143
                echo "                            <a class=\"accordion-toggle\" href=\"#\">
                                <span class=\"fa fa-calendar\"></span>
                                <span class=\"sidebar-title\">Events</span>
                            </a>
                            ";
            }
            // line 148
            echo "                        ";
        }
        // line 149
        echo "                        <ul class=\"nav sub-nav\">
                            <li>
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-book\"></span> Event List </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("addevent");
        echo "\">
                                    <span class=\"glyphicon glyphicon-share-alt\"></span> Add an event </a>
                            </li>
                        </ul>
                    </li>


                </ul>
                <!-- End: Sidebar Menu -->

                <!-- Start: Sidebar Collapse Button -->
                <div class=\"sidebar-toggle-mini\">
                    <a href=\"#\">
                        <span class=\"fa fa-sign-out\"></span>
                    </a>
                </div>
                <!-- End: Sidebar Collapse Button -->

            </div>
            <!-- End: Sidebar Left Content -->

        </aside>
        <!-- End: Sidebar Left -->
        <!------------------------------------------------------------ End: SIDEBAR LEFT CONTENT -------------------------------------------------------------->
    ";
        
        $__internal_80f957350a3a9788259cd79186670698a80dbe69062ffda7f699f48dfa6f641b->leave($__internal_80f957350a3a9788259cd79186670698a80dbe69062ffda7f699f48dfa6f641b_prof);

    }

    // line 180
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_d564db4a85a04d91a7d90e9249a37cf04192ce7be8ddac7ec5101c4b511e7806 = $this->env->getExtension("native_profiler");
        $__internal_d564db4a85a04d91a7d90e9249a37cf04192ce7be8ddac7ec5101c4b511e7806->enter($__internal_d564db4a85a04d91a7d90e9249a37cf04192ce7be8ddac7ec5101c4b511e7806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        // line 181
        echo "        <!-- Start: Content-Wrapper -->
        <section id=\"content_wrapper\">
            ";
        // line 183
        if (((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array())) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array())))) {
            // line 184
            echo "            <div class=\"alert alert-danger alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <i class=\"fa fa-exclamation-triangle pr10\"></i>
                <strong>You profile is incomplete!</strong>
                <a href=\"";
            // line 188
            echo $this->env->getExtension('routing')->getPath("update");
            echo "\" class=\"alert-link\">Complete your profile here!</a>
            </div>
            ";
        }
        // line 191
        echo "            <!-- Start: Topbar-Dropdown -->
            <div id=\"topbar-dropmenu\">
                <div class=\"topbar-menu row\">
                    <div class=\"col-xs-4 col-sm-2\">
                        <a href=\"#\" class=\"metro-tile\">
                            <span class=\"glyphicon glyphicon-inbox\"></span>
                            <span class=\"metro-title\">Messages</span>
                        </a>
                    </div>
                    <div class=\"col-xs-4 col-sm-2\">
                        <a href=\"#\" class=\"metro-tile\">
                            <span class=\"glyphicon glyphicon-user\"></span>
                            <span class=\"metro-title\">Users</span>
                        </a>
                    </div>
                    <div class=\"col-xs-4 col-sm-2\">
                        <a href=\"#\" class=\"metro-tile\">
                            <span class=\"glyphicon glyphicon-headphones\"></span>
                            <span class=\"metro-title\">Support</span>
                        </a>
                    </div>
                    <div class=\"col-xs-4 col-sm-2\">
                        <a href=\"#\" class=\"metro-tile\">
                            <span class=\"fa fa-gears\"></span>
                            <span class=\"metro-title\">Settings</span>
                        </a>
                    </div>
                    <div class=\"col-xs-4 col-sm-2\">
                        <a href=\"#\" class=\"metro-tile\">
                            <span class=\"glyphicon glyphicon-facetime-video\"></span>
                            <span class=\"metro-title\">Videos</span>
                        </a>
                    </div>
                    <div class=\"col-xs-4 col-sm-2\">
                        <a href=\"#\" class=\"metro-tile\">
                            <span class=\"glyphicon glyphicon-picture\"></span>
                            <span class=\"metro-title\">Pictures</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End: Topbar-Dropdown -->
        </section>
        <!-- End: Content-Wrapper -->
    ";
        
        $__internal_d564db4a85a04d91a7d90e9249a37cf04192ce7be8ddac7ec5101c4b511e7806->leave($__internal_d564db4a85a04d91a7d90e9249a37cf04192ce7be8ddac7ec5101c4b511e7806_prof);

    }

    // line 236
    public function block_body($context, array $blocks = array())
    {
        $__internal_c29bea31a20f6ba4c045856742cc887b33c32d0584f831f614e3d5cb559e2fbf = $this->env->getExtension("native_profiler");
        $__internal_c29bea31a20f6ba4c045856742cc887b33c32d0584f831f614e3d5cb559e2fbf->enter($__internal_c29bea31a20f6ba4c045856742cc887b33c32d0584f831f614e3d5cb559e2fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c29bea31a20f6ba4c045856742cc887b33c32d0584f831f614e3d5cb559e2fbf->leave($__internal_c29bea31a20f6ba4c045856742cc887b33c32d0584f831f614e3d5cb559e2fbf_prof);

    }

    // line 238
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_589ccf6626af79c32598ac5e6d081bb0a959ac44dfaa60459bd2eabb0d0cbf52 = $this->env->getExtension("native_profiler");
        $__internal_589ccf6626af79c32598ac5e6d081bb0a959ac44dfaa60459bd2eabb0d0cbf52->enter($__internal_589ccf6626af79c32598ac5e6d081bb0a959ac44dfaa60459bd2eabb0d0cbf52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 239
        echo "        <!-- jQuery -->
        <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery_ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Theme Javascript -->
        <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/utility/utility.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/demo/demo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            jQuery(document).ready(function() {

                \"use strict\";

                // Init Demo JS
                Demo.init();


                // Init Theme Core
                Core.init();


                // Init Widget Demo JS
                // demoHighCharts.init();

                // Because we are using Admin Panels we use the OnFinish
                // callback to activate the demoWidgets. It's smoother if
                // we let the panels be moved and organized before
                // filling them with content from various plugins

                // Init plugins used on this page
                // HighCharts, JvectorMap, Admin Panels

                // Init Admin Panels on widgets inside the \".admin-panels\" container
                \$('.admin-panels').adminpanel({
                    grid: '.admin-grid',
                    draggable: true,
                    preserveGrid: true,
                    // mobile: true,
                    onStart: function() {
                        // Do something before AdminPanels runs
                    },
                    onSave: function() {
                        \$(window).trigger('resize');
                    }
                });
            });
        </script>
        <script>
            \$(\".phone\").text(function(i, text) {
                text = text.replace(/(\\d{2})(\\d{3})(\\d{3})(\\d{4})/, \"\$1-\$2-\$3-\$4\");
                return text;
            });
        </script>
        <!-- END: PAGE SCRIPTS -->
    ";
        
        $__internal_589ccf6626af79c32598ac5e6d081bb0a959ac44dfaa60459bd2eabb0d0cbf52->leave($__internal_589ccf6626af79c32598ac5e6d081bb0a959ac44dfaa60459bd2eabb0d0cbf52_prof);

    }

    public function getTemplateName()
    {
        return "::default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  501 => 245,  497 => 244,  493 => 243,  488 => 241,  484 => 240,  481 => 239,  475 => 238,  464 => 236,  413 => 191,  407 => 188,  401 => 184,  399 => 183,  395 => 181,  389 => 180,  357 => 155,  349 => 149,  346 => 148,  339 => 143,  330 => 138,  327 => 137,  325 => 136,  321 => 134,  318 => 133,  309 => 128,  300 => 123,  297 => 122,  295 => 121,  291 => 119,  282 => 114,  273 => 109,  271 => 108,  260 => 99,  254 => 98,  238 => 87,  234 => 85,  227 => 82,  220 => 79,  218 => 78,  211 => 74,  207 => 72,  199 => 68,  191 => 64,  189 => 63,  181 => 58,  166 => 45,  158 => 41,  150 => 37,  148 => 36,  144 => 34,  138 => 33,  129 => 18,  124 => 16,  119 => 14,  114 => 12,  111 => 11,  105 => 10,  93 => 6,  82 => 293,  80 => 238,  77 => 237,  74 => 236,  71 => 180,  69 => 98,  65 => 96,  63 => 33,  58 => 30,  56 => 29,  45 => 20,  43 => 10,  36 => 6,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* */
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}North American University{% endblock %}</title>*/
/*     <meta name="author" content="North American University">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*     {% block stylesheets %}*/
/*         <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>*/
/*         <link rel='stylesheet' type='text/css' href='{{ asset('assets/skin/base/fonts/admindesigns.less') }}'>*/
/*         <!-- Font CSS -->*/
/*         <link rel='stylesheet' type='text/css' href='{{ asset('assets/fonts/font-awesome/css/font-awesome.css') }}'>*/
/*         <!-- Theme CSS -->*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('assets/skin/default_skin/css/theme.css') }}">*/
/*         <!-- Admin Forms CSS -->*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin-tools/admin-forms/css/admin-forms.css') }}">*/
/*     {% endblock %}*/
/* */
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*     <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* */
/* {% set route = app.request.attributes.get('_route') %}*/
/* <!-- Start: Main -->*/
/* <div id="main">*/
/*     <!-- Start: Header -->*/
/*     {% block header %}*/
/*         <header class="navbar navbar-fixed-top bg-dark">*/
/*             <div class="navbar-branding">*/
/*                 {% if(app.user.birthday is empty or app.user.cellphone is empty or app.user.gender is empty  ) %}*/
/*                     <a class="navbar-brand" href="{{ path('update') }}">*/
/*                         <b>Kamp</b>Web*/
/*                     </a>*/
/*                 {% else %}*/
/*                     <a class="navbar-brand" href="{{ path('dashboard') }}">*/
/*                         <b>Kamp</b>Web*/
/*                     </a>*/
/*                 {% endif %}*/
/*                 <span id="toggle_sidemenu_l" class="ad ad-lines"></span>*/
/*             </div>*/
/*             <ul class="nav navbar-nav navbar-left">*/
/* */
/*                 <li>*/
/*                     <a class="topbar-menu-toggle" href="#">*/
/*                         <span class="ad ad-wand fs16"></span>*/
/*                     </a>*/
/*                 </li>*/
/* */
/*             </ul>*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown">  {{ app.user.fullname }}*/
/*                         <span class="caret caret-tp hidden-xs"></span>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">*/
/*                         <li class="list-group-item">*/
/*                             {% if(app.user.birthday is empty or app.user.cellphone is empty or app.user.gender is empty  ) %}*/
/*                                 <a href="{{ path('update') }}" class="animated animated-short fadeInUp">*/
/*                                     <span class="fa fa-user"></span> My Profile  </a>*/
/*                                 </a>*/
/*                             {% else %}*/
/*                                 <a href="{{ path('profile', {'userid': app.user.id}) }}" class="animated animated-short fadeInUp">*/
/*                                     <span class="fa fa-user"></span> My Profile  </a>*/
/*                                 </a>*/
/*                             {% endif %}*/
/*                         </li>*/
/*                         <li class="list-group-item">*/
/*                             <a href="{{ path('update') }}" class="animated animated-short fadeInUp">*/
/*                                 <span class="fa fa-gear"></span> Edit Profile </a>*/
/*                         </li>*/
/*                         <li class="list-group-item">*/
/*                             {% if(app.user.birthday is empty or app.user.cellphone is empty or app.user.gender is empty  ) %}*/
/*                                 <a href="{{ path('update') }}" class="animated animated-short fadeInUp">*/
/*                                     <span class="fa fa-shield"></span> Change Password  </a>*/
/*                             {% else %}*/
/*                                 <a href="{{ path('changepassword') }}" class="animated animated-short fadeInUp">*/
/*                                     <span class="fa fa-shield"></span> Change Password  </a>*/
/*                             {% endif %}*/
/*                         </li>*/
/*                         <li class="dropdown-footer">*/
/*                             <a href="{{ path('logout') }}" class="">*/
/*                                 <span class="fa fa-power-off pr5"></span> Logout </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/* */
/*             </ul>*/
/*         </header>*/
/*     {% endblock %}*/
/*     <!-- End: Header -->*/
/*     <!-- Start: Sidebar Left -->*/
/*     {% block sidebar %}*/
/*         <aside id="sidebar_left" class="nano nano-primary affix">*/
/* */
/*             <!-- Start: Sidebar Left Content -->*/
/*             <div class="sidebar-left-content nano-content">*/
/* */
/*                 <!-- Start: Sidebar Left Menu -->*/
/*                 <ul class="nav sidebar-menu">*/
/*                     <li class="sidebar-label pt20">Menu</li>*/
/*                     <li>*/
/*                         {% if(app.user.birthday is empty or app.user.cellphone is empty or app.user.gender is empty  ) %}*/
/*                         <a href="{{ path('update') }}">*/
/*                             <span class="glyphicon glyphicon-home"></span>*/
/*                             <span class="sidebar-title">Dashboard</span>*/
/*                         </a>*/
/*                         {% else %}*/
/*                         <a href="{{ path('dashboard') }}">*/
/*                             <span class="glyphicon glyphicon-home"></span>*/
/*                             <span class="sidebar-title">Dashboard</span>*/
/*                         </a>*/
/*                         {% endif %}*/
/*                     </li>*/
/*                     <li>*/
/*                         {% if is_granted('ROLE_ADMIN') %}*/
/*                             {% if(app.user.birthday is empty or app.user.cellphone is empty or app.user.gender is empty  ) %}*/
/*                             <a href="{{ path('update') }}">*/
/*                                     <span class="fa fa-users"></span>*/
/*                                     <span class="sidebar-title">Users</span>*/
/*                             </a>*/
/*                             {% else %}*/
/*                             <a href="{{ path('users') }}">*/
/*                                 <span class="fa fa-users"></span>*/
/*                                 <span class="sidebar-title">Users</span>*/
/*                             </a>*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/*                     </li>*/
/*                     <li>*/
/*                         {% if is_granted('ROLE_ADMIN') %}*/
/*                             {% if(app.user.birthday is empty or app.user.cellphone is empty or app.user.gender is empty  ) %}*/
/*                             <a href="{{ path('update') }}">*/
/*                                 <span class="fa fa-calendar"></span>*/
/*                                 <span class="sidebar-title">Events</span>*/
/*                             </a>*/
/*                             {% else %}*/
/*                             <a class="accordion-toggle" href="#">*/
/*                                 <span class="fa fa-calendar"></span>*/
/*                                 <span class="sidebar-title">Events</span>*/
/*                             </a>*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/*                         <ul class="nav sub-nav">*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <span class="glyphicon glyphicon-book"></span> Event List </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('addevent') }}">*/
/*                                     <span class="glyphicon glyphicon-share-alt"></span> Add an event </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/* */
/* */
/*                 </ul>*/
/*                 <!-- End: Sidebar Menu -->*/
/* */
/*                 <!-- Start: Sidebar Collapse Button -->*/
/*                 <div class="sidebar-toggle-mini">*/
/*                     <a href="#">*/
/*                         <span class="fa fa-sign-out"></span>*/
/*                     </a>*/
/*                 </div>*/
/*                 <!-- End: Sidebar Collapse Button -->*/
/* */
/*             </div>*/
/*             <!-- End: Sidebar Left Content -->*/
/* */
/*         </aside>*/
/*         <!-- End: Sidebar Left -->*/
/*         <!------------------------------------------------------------ End: SIDEBAR LEFT CONTENT -------------------------------------------------------------->*/
/*     {% endblock %}*/
/*     {% block topbar %}*/
/*         <!-- Start: Content-Wrapper -->*/
/*         <section id="content_wrapper">*/
/*             {% if(app.user.birthday is empty or app.user.cellphone is empty or app.user.gender is empty  ) %}*/
/*             <div class="alert alert-danger alert-dismissable">*/
/*                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*                 <i class="fa fa-exclamation-triangle pr10"></i>*/
/*                 <strong>You profile is incomplete!</strong>*/
/*                 <a href="{{ path('update') }}" class="alert-link">Complete your profile here!</a>*/
/*             </div>*/
/*             {% endif %}*/
/*             <!-- Start: Topbar-Dropdown -->*/
/*             <div id="topbar-dropmenu">*/
/*                 <div class="topbar-menu row">*/
/*                     <div class="col-xs-4 col-sm-2">*/
/*                         <a href="#" class="metro-tile">*/
/*                             <span class="glyphicon glyphicon-inbox"></span>*/
/*                             <span class="metro-title">Messages</span>*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="col-xs-4 col-sm-2">*/
/*                         <a href="#" class="metro-tile">*/
/*                             <span class="glyphicon glyphicon-user"></span>*/
/*                             <span class="metro-title">Users</span>*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="col-xs-4 col-sm-2">*/
/*                         <a href="#" class="metro-tile">*/
/*                             <span class="glyphicon glyphicon-headphones"></span>*/
/*                             <span class="metro-title">Support</span>*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="col-xs-4 col-sm-2">*/
/*                         <a href="#" class="metro-tile">*/
/*                             <span class="fa fa-gears"></span>*/
/*                             <span class="metro-title">Settings</span>*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="col-xs-4 col-sm-2">*/
/*                         <a href="#" class="metro-tile">*/
/*                             <span class="glyphicon glyphicon-facetime-video"></span>*/
/*                             <span class="metro-title">Videos</span>*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="col-xs-4 col-sm-2">*/
/*                         <a href="#" class="metro-tile">*/
/*                             <span class="glyphicon glyphicon-picture"></span>*/
/*                             <span class="metro-title">Pictures</span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- End: Topbar-Dropdown -->*/
/*         </section>*/
/*         <!-- End: Content-Wrapper -->*/
/*     {% endblock %}*/
/*     {% block body %}{% endblock %}*/
/*     <!-- BEGIN: PAGE SCRIPTS -->*/
/*     {% block javascripts %}*/
/*         <!-- jQuery -->*/
/*         <script src="{{ asset('assets/vendor/jquery/jquery-1.11.1.min.js') }}"></script>*/
/*         <script src="{{ asset('assets/vendor/jquery/jquery_ui/jquery-ui.min.js') }}"></script>*/
/*         <!-- Theme Javascript -->*/
/*         <script src="{{ asset('assets/js/utility/utility.js') }}"></script>*/
/*         <script src="{{ asset('assets/js/demo/demo.js') }}"></script>*/
/*         <script src="{{ asset('assets/js/main.js') }}"></script>*/
/*         <script type="text/javascript">*/
/*             jQuery(document).ready(function() {*/
/* */
/*                 "use strict";*/
/* */
/*                 // Init Demo JS*/
/*                 Demo.init();*/
/* */
/* */
/*                 // Init Theme Core*/
/*                 Core.init();*/
/* */
/* */
/*                 // Init Widget Demo JS*/
/*                 // demoHighCharts.init();*/
/* */
/*                 // Because we are using Admin Panels we use the OnFinish*/
/*                 // callback to activate the demoWidgets. It's smoother if*/
/*                 // we let the panels be moved and organized before*/
/*                 // filling them with content from various plugins*/
/* */
/*                 // Init plugins used on this page*/
/*                 // HighCharts, JvectorMap, Admin Panels*/
/* */
/*                 // Init Admin Panels on widgets inside the ".admin-panels" container*/
/*                 $('.admin-panels').adminpanel({*/
/*                     grid: '.admin-grid',*/
/*                     draggable: true,*/
/*                     preserveGrid: true,*/
/*                     // mobile: true,*/
/*                     onStart: function() {*/
/*                         // Do something before AdminPanels runs*/
/*                     },*/
/*                     onSave: function() {*/
/*                         $(window).trigger('resize');*/
/*                     }*/
/*                 });*/
/*             });*/
/*         </script>*/
/*         <script>*/
/*             $(".phone").text(function(i, text) {*/
/*                 text = text.replace(/(\d{2})(\d{3})(\d{3})(\d{4})/, "$1-$2-$3-$4");*/
/*                 return text;*/
/*             });*/
/*         </script>*/
/*         <!-- END: PAGE SCRIPTS -->*/
/*     {% endblock %}*/
/* </div>*/
/* */
/* */
/* </html>*/
/* */
