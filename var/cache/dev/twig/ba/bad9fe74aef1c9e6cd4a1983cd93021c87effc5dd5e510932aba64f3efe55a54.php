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
        $__internal_296da7313e96bb5fa9061732e2fe13d189112861f3313a8a184b5f0faba3480e = $this->env->getExtension("native_profiler");
        $__internal_296da7313e96bb5fa9061732e2fe13d189112861f3313a8a184b5f0faba3480e->enter($__internal_296da7313e96bb5fa9061732e2fe13d189112861f3313a8a184b5f0faba3480e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::default.html.twig"));

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

<body class=\"dashboard-page sb-l-o sb-r-c\">
";
        // line 30
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 31
        echo "<!-- Start: Main -->
<div id=\"main\">
    <!-- Start: Header -->
    ";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 97
        echo "    <!-- End: Header -->
    <!-- Start: Sidebar Left -->
    ";
        // line 99
        $this->displayBlock('sidebar', $context, $blocks);
        // line 181
        echo "    ";
        $this->displayBlock('topbar', $context, $blocks);
        // line 237
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 238
        echo "    <!-- BEGIN: PAGE SCRIPTS -->
    ";
        // line 239
        $this->displayBlock('javascripts', $context, $blocks);
        // line 288
        echo "</div>
</body>

</html>
";
        
        $__internal_296da7313e96bb5fa9061732e2fe13d189112861f3313a8a184b5f0faba3480e->leave($__internal_296da7313e96bb5fa9061732e2fe13d189112861f3313a8a184b5f0faba3480e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_df123de51c707e16fa82a6d89aefad31dafee51f80ddfceb2ae0dd0ffd1597f8 = $this->env->getExtension("native_profiler");
        $__internal_df123de51c707e16fa82a6d89aefad31dafee51f80ddfceb2ae0dd0ffd1597f8->enter($__internal_df123de51c707e16fa82a6d89aefad31dafee51f80ddfceb2ae0dd0ffd1597f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "North American University";
        
        $__internal_df123de51c707e16fa82a6d89aefad31dafee51f80ddfceb2ae0dd0ffd1597f8->leave($__internal_df123de51c707e16fa82a6d89aefad31dafee51f80ddfceb2ae0dd0ffd1597f8_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_96a5c02e137018d0427d8c91866229ef8bec1e1f82d9d11a226683550c23d701 = $this->env->getExtension("native_profiler");
        $__internal_96a5c02e137018d0427d8c91866229ef8bec1e1f82d9d11a226683550c23d701->enter($__internal_96a5c02e137018d0427d8c91866229ef8bec1e1f82d9d11a226683550c23d701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_96a5c02e137018d0427d8c91866229ef8bec1e1f82d9d11a226683550c23d701->leave($__internal_96a5c02e137018d0427d8c91866229ef8bec1e1f82d9d11a226683550c23d701_prof);

    }

    // line 34
    public function block_header($context, array $blocks = array())
    {
        $__internal_991aa9687f7096e1ef7748c434a68a6fb22a069440b09ece23ad0bc6d882f621 = $this->env->getExtension("native_profiler");
        $__internal_991aa9687f7096e1ef7748c434a68a6fb22a069440b09ece23ad0bc6d882f621->enter($__internal_991aa9687f7096e1ef7748c434a68a6fb22a069440b09ece23ad0bc6d882f621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 35
        echo "        <header class=\"navbar navbar-fixed-top bg-dark\">
            <div class=\"navbar-branding\">
                ";
        // line 37
        if (((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array())) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array())))) {
            // line 38
            echo "                    <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('routing')->getPath("update");
            echo "\">
                        <b>Kamp</b>Web
                    </a>
                ";
        } else {
            // line 42
            echo "                    <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('routing')->getPath("dashboard");
            echo "\">
                        <b>Kamp</b>Web
                    </a>
                ";
        }
        // line 46
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
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "fullname", array()), "html", null, true);
        echo "
                        <span class=\"caret caret-tp hidden-xs\"></span>
                    </a>
                    <ul class=\"dropdown-menu list-group dropdown-persist w250\" role=\"menu\">
                        <li class=\"list-group-item\">
                            ";
        // line 64
        if (((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array())) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array())))) {
            // line 65
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("update");
            echo "\" class=\"animated animated-short fadeInUp\">
                                    <span class=\"fa fa-user\"></span> My Profile  </a>
                                </a>
                            ";
        } else {
            // line 69
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profile", array("userid" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\" class=\"animated animated-short fadeInUp\">
                                    <span class=\"fa fa-user\"></span> My Profile  </a>
                                </a>
                            ";
        }
        // line 73
        echo "                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("update");
        echo "\" class=\"animated animated-short fadeInUp\">
                                <span class=\"fa fa-gear\"></span> Edit Profile </a>
                        </li>
                        <li class=\"list-group-item\">
                            ";
        // line 79
        if (((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array())) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array())))) {
            // line 80
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("update");
            echo "\" class=\"animated animated-short fadeInUp\">
                                    <span class=\"fa fa-shield\"></span> Change Password  </a>
                            ";
        } else {
            // line 83
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("changepassword");
            echo "\" class=\"animated animated-short fadeInUp\">
                                    <span class=\"fa fa-shield\"></span> Change Password  </a>
                            ";
        }
        // line 86
        echo "                        </li>
                        <li class=\"dropdown-footer\">
                            <a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" class=\"\">
                                <span class=\"fa fa-power-off pr5\"></span> Logout </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </header>
    ";
        
        $__internal_991aa9687f7096e1ef7748c434a68a6fb22a069440b09ece23ad0bc6d882f621->leave($__internal_991aa9687f7096e1ef7748c434a68a6fb22a069440b09ece23ad0bc6d882f621_prof);

    }

    // line 99
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_49334c370deb51830ab533cdffe2c22d4b7e83720e8492a470fcd86f443abd7c = $this->env->getExtension("native_profiler");
        $__internal_49334c370deb51830ab533cdffe2c22d4b7e83720e8492a470fcd86f443abd7c->enter($__internal_49334c370deb51830ab533cdffe2c22d4b7e83720e8492a470fcd86f443abd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 100
        echo "        <aside id=\"sidebar_left\" class=\"nano nano-primary affix\">

            <!-- Start: Sidebar Left Content -->
            <div class=\"sidebar-left-content nano-content\">

                <!-- Start: Sidebar Left Menu -->
                <ul class=\"nav sidebar-menu\">
                    <li class=\"sidebar-label pt20\">Menu</li>
                    <li>
                        ";
        // line 109
        if (((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array())) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array())))) {
            // line 110
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("update");
            echo "\">
                            <span class=\"glyphicon glyphicon-home\"></span>
                            <span class=\"sidebar-title\">Dashboard</span>
                        </a>
                        ";
        } else {
            // line 115
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("dashboard");
            echo "\">
                            <span class=\"glyphicon glyphicon-home\"></span>
                            <span class=\"sidebar-title\">Dashboard</span>
                        </a>
                        ";
        }
        // line 120
        echo "                    </li>
                    <li>
                        ";
        // line 122
        if (((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array())) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array())))) {
            // line 123
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("update");
            echo "\">
                                <span class=\"fa fa-users\"></span>
                                <span class=\"sidebar-title\">Users</span>
                        </a>
                        ";
        } else {
            // line 128
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("users");
            echo "\">
                            <span class=\"fa fa-users\"></span>
                            <span class=\"sidebar-title\">Users</span>
                        </a>
                        ";
        }
        // line 133
        echo "                    </li>
                    <li>
                        ";
        // line 135
        if (((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array())) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array())))) {
            // line 136
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("update");
            echo "\">
                            <span class=\"fa fa-calendar\"></span>
                            <span class=\"sidebar-title\">Events</span>
                        </a>
                        ";
        } else {
            // line 141
            echo "                        <a class=\"accordion-toggle\" href=\"#\">
                            <span class=\"fa fa-calendar\"></span>
                            <span class=\"sidebar-title\">Events</span>
                        </a>
                        ";
        }
        // line 146
        echo "                        <ul class=\"nav sub-nav\">
                            <li>
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-book\"></span> Event List </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 152
        echo $this->env->getExtension('routing')->getPath("addevent");
        echo "\">
                                    <span class=\"glyphicon glyphicon-share-alt\"></span> Add an event </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-picture\"></span> Media </a>
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
        
        $__internal_49334c370deb51830ab533cdffe2c22d4b7e83720e8492a470fcd86f443abd7c->leave($__internal_49334c370deb51830ab533cdffe2c22d4b7e83720e8492a470fcd86f443abd7c_prof);

    }

    // line 181
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_8cd4e205403cfadc22fa318c874281e6ed294c565fee382f4a980c2c2b5213ce = $this->env->getExtension("native_profiler");
        $__internal_8cd4e205403cfadc22fa318c874281e6ed294c565fee382f4a980c2c2b5213ce->enter($__internal_8cd4e205403cfadc22fa318c874281e6ed294c565fee382f4a980c2c2b5213ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        // line 182
        echo "        <!-- Start: Content-Wrapper -->
        <section id=\"content_wrapper\">
            ";
        // line 184
        if (((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array())) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array())))) {
            // line 185
            echo "            <div class=\"alert alert-danger alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <i class=\"fa fa-exclamation-triangle pr10\"></i>
                <strong>You profile is incomplete!</strong>
                <a href=\"";
            // line 189
            echo $this->env->getExtension('routing')->getPath("update");
            echo "\" class=\"alert-link\">Complete your profile here!</a>
            </div>
            ";
        }
        // line 192
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
        
        $__internal_8cd4e205403cfadc22fa318c874281e6ed294c565fee382f4a980c2c2b5213ce->leave($__internal_8cd4e205403cfadc22fa318c874281e6ed294c565fee382f4a980c2c2b5213ce_prof);

    }

    // line 237
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee66eb4e61e65edd08f1e5e347192ad4141ada71d8d62e91ff5c6542e91ba3f0 = $this->env->getExtension("native_profiler");
        $__internal_ee66eb4e61e65edd08f1e5e347192ad4141ada71d8d62e91ff5c6542e91ba3f0->enter($__internal_ee66eb4e61e65edd08f1e5e347192ad4141ada71d8d62e91ff5c6542e91ba3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ee66eb4e61e65edd08f1e5e347192ad4141ada71d8d62e91ff5c6542e91ba3f0->leave($__internal_ee66eb4e61e65edd08f1e5e347192ad4141ada71d8d62e91ff5c6542e91ba3f0_prof);

    }

    // line 239
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d5e915672cad79a3de0257f7b976c26ac4d8f68ceb7aaaf7db40c95d065ab37d = $this->env->getExtension("native_profiler");
        $__internal_d5e915672cad79a3de0257f7b976c26ac4d8f68ceb7aaaf7db40c95d065ab37d->enter($__internal_d5e915672cad79a3de0257f7b976c26ac4d8f68ceb7aaaf7db40c95d065ab37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 240
        echo "        <!-- jQuery -->
        <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery_ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Theme Javascript -->
        <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/utility/utility.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/demo/demo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 246
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
        <!-- END: PAGE SCRIPTS -->
    ";
        
        $__internal_d5e915672cad79a3de0257f7b976c26ac4d8f68ceb7aaaf7db40c95d065ab37d->leave($__internal_d5e915672cad79a3de0257f7b976c26ac4d8f68ceb7aaaf7db40c95d065ab37d_prof);

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
        return array (  494 => 246,  490 => 245,  486 => 244,  481 => 242,  477 => 241,  474 => 240,  468 => 239,  457 => 237,  406 => 192,  400 => 189,  394 => 185,  392 => 184,  388 => 182,  382 => 181,  346 => 152,  338 => 146,  331 => 141,  322 => 136,  320 => 135,  316 => 133,  307 => 128,  298 => 123,  296 => 122,  292 => 120,  283 => 115,  274 => 110,  272 => 109,  261 => 100,  255 => 99,  239 => 88,  235 => 86,  228 => 83,  221 => 80,  219 => 79,  212 => 75,  208 => 73,  200 => 69,  192 => 65,  190 => 64,  182 => 59,  167 => 46,  159 => 42,  151 => 38,  149 => 37,  145 => 35,  139 => 34,  130 => 18,  125 => 16,  120 => 14,  115 => 12,  112 => 11,  106 => 10,  94 => 6,  83 => 288,  81 => 239,  78 => 238,  75 => 237,  72 => 181,  70 => 99,  66 => 97,  64 => 34,  59 => 31,  57 => 30,  45 => 20,  43 => 10,  36 => 6,  29 => 1,);
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
/* <body class="dashboard-page sb-l-o sb-r-c">*/
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
/*                         {% if(app.user.birthday is empty or app.user.cellphone is empty or app.user.gender is empty  ) %}*/
/*                         <a href="{{ path('update') }}">*/
/*                                 <span class="fa fa-users"></span>*/
/*                                 <span class="sidebar-title">Users</span>*/
/*                         </a>*/
/*                         {% else %}*/
/*                         <a href="{{ path('users') }}">*/
/*                             <span class="fa fa-users"></span>*/
/*                             <span class="sidebar-title">Users</span>*/
/*                         </a>*/
/*                         {% endif %}*/
/*                     </li>*/
/*                     <li>*/
/*                         {% if(app.user.birthday is empty or app.user.cellphone is empty or app.user.gender is empty  ) %}*/
/*                         <a href="{{ path('update') }}">*/
/*                             <span class="fa fa-calendar"></span>*/
/*                             <span class="sidebar-title">Events</span>*/
/*                         </a>*/
/*                         {% else %}*/
/*                         <a class="accordion-toggle" href="#">*/
/*                             <span class="fa fa-calendar"></span>*/
/*                             <span class="sidebar-title">Events</span>*/
/*                         </a>*/
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
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <span class="glyphicon glyphicon-picture"></span> Media </a>*/
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
/*         <!-- END: PAGE SCRIPTS -->*/
/*     {% endblock %}*/
/* </div>*/
/* </body>*/
/* */
/* </html>*/
/* */
