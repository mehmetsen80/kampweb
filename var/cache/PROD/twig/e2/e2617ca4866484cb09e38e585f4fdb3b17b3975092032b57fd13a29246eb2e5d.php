<?php

/* ::default.html.twig */
class __TwigTemplate_643179d9b07a81c9fa4d26679b15ffdb995687aee7bd48b591c4e62ae84a4900 extends Twig_Template
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
        $__internal_c220c617cb93fe78ce200225cc5fefb2c452f8f37e15cdcc4523b05159ab0e7d = $this->env->getExtension("native_profiler");
        $__internal_c220c617cb93fe78ce200225cc5fefb2c452f8f37e15cdcc4523b05159ab0e7d->enter($__internal_c220c617cb93fe78ce200225cc5fefb2c452f8f37e15cdcc4523b05159ab0e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::default.html.twig"));

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
        // line 112
        echo "    <!-- End: Header -->
    <!-- Start: Sidebar Left -->
    ";
        // line 114
        $this->displayBlock('sidebar', $context, $blocks);
        // line 180
        echo "    ";
        $this->displayBlock('topbar', $context, $blocks);
        // line 229
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 230
        echo "<!-- BEGIN: PAGE SCRIPTS -->
";
        // line 231
        $this->displayBlock('javascripts', $context, $blocks);
        // line 280
        echo "    </div>
</body>

</html>
";
        
        $__internal_c220c617cb93fe78ce200225cc5fefb2c452f8f37e15cdcc4523b05159ab0e7d->leave($__internal_c220c617cb93fe78ce200225cc5fefb2c452f8f37e15cdcc4523b05159ab0e7d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c24f2484b8918711eb47a36438a91403a1f9ec2d666c298fbaa7a084cf35b960 = $this->env->getExtension("native_profiler");
        $__internal_c24f2484b8918711eb47a36438a91403a1f9ec2d666c298fbaa7a084cf35b960->enter($__internal_c24f2484b8918711eb47a36438a91403a1f9ec2d666c298fbaa7a084cf35b960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "North American University";
        
        $__internal_c24f2484b8918711eb47a36438a91403a1f9ec2d666c298fbaa7a084cf35b960->leave($__internal_c24f2484b8918711eb47a36438a91403a1f9ec2d666c298fbaa7a084cf35b960_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9ad807ec36cc120b558e39ffa798d7430f1108dcf4cf3ed7b2974695bcf3ffeb = $this->env->getExtension("native_profiler");
        $__internal_9ad807ec36cc120b558e39ffa798d7430f1108dcf4cf3ed7b2974695bcf3ffeb->enter($__internal_9ad807ec36cc120b558e39ffa798d7430f1108dcf4cf3ed7b2974695bcf3ffeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9ad807ec36cc120b558e39ffa798d7430f1108dcf4cf3ed7b2974695bcf3ffeb->leave($__internal_9ad807ec36cc120b558e39ffa798d7430f1108dcf4cf3ed7b2974695bcf3ffeb_prof);

    }

    // line 34
    public function block_header($context, array $blocks = array())
    {
        $__internal_0ef01b8476d181dd1019548cfc9af85133711f0ecf91b10a7cdfaf319c0c45a7 = $this->env->getExtension("native_profiler");
        $__internal_0ef01b8476d181dd1019548cfc9af85133711f0ecf91b10a7cdfaf319c0c45a7->enter($__internal_0ef01b8476d181dd1019548cfc9af85133711f0ecf91b10a7cdfaf319c0c45a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 35
        echo "    <header class=\"navbar navbar-fixed-top bg-dark\">
        <div class=\"navbar-branding\">
            <a class=\"navbar-brand\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">
                <b>Kamp</b>Web
            </a>
            <span id=\"toggle_sidemenu_l\" class=\"ad ad-lines\"></span>
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
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                    <span class=\"ad ad-radio-tower fs18\"></span>
                </a>
                <ul class=\"dropdown-menu media-list w350 animated animated-shorter fadeIn\" role=\"menu\">
                    <li class=\"dropdown-header\">
                        <span class=\"dropdown-title\"> Notifications</span>
                        <span class=\"label label-warning\">12</span>
                    </li>
                    <li class=\"media\">
                        <div class=\"media-body\">
                            <h5 class=\"media-heading\">Article
                                <small class=\"text-muted\">- 08/16/22</small>
                            </h5> Last Updated 36 days ago by
                            <a class=\"text-system\" href=\"#\"> Max </a>
                        </div>
                    </li>
                    <li class=\"media\">
                        <div class=\"media-body\">
                            <h5 class=\"media-heading mv5\">Article
                                <small> - 08/16/22</small>
                            </h5>
                            Last Updated 36 days ago by
                            <a class=\"text-system\" href=\"#\"> Max </a>
                        </div>
                    </li>
                    <li class=\"media\">
                        <div class=\"media-body\">
                            <h5 class=\"media-heading\">Article
                                <small class=\"text-muted\">- 08/16/22</small>
                            </h5> Last Updated 36 days ago by
                            <a class=\"text-system\" href=\"#\"> Max </a>
                        </div>
                    </li>
                    <li class=\"media\">
                        <div class=\"media-body\">
                            <h5 class=\"media-heading mv5\">Article
                                <small class=\"text-muted\">- 08/16/22</small>
                            </h5> Last Updated 36 days ago by
                            <a class=\"text-system\" href=\"#\"> Max </a>
                        </div>
                    </li>
                </ul>
            </li>

            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle fw600 p15\" data-toggle=\"dropdown\">  ";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "fullname", array()), "html", null, true);
        echo "
                    <span class=\"caret caret-tp hidden-xs\"></span>
                </a>
                <ul class=\"dropdown-menu list-group dropdown-persist w250\" role=\"menu\">
                    <li class=\"dropdown-footer\">
                        <a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" class=\"\">
                            <span class=\"fa fa-power-off pr5\"></span> Logout </a>
                    </li>
                </ul>
            </li>

        </ul>
    </header>
    ";
        
        $__internal_0ef01b8476d181dd1019548cfc9af85133711f0ecf91b10a7cdfaf319c0c45a7->leave($__internal_0ef01b8476d181dd1019548cfc9af85133711f0ecf91b10a7cdfaf319c0c45a7_prof);

    }

    // line 114
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_093971abaae1f1b387db5b12a1c25df132495de102b1847991ff3c656cdaa65e = $this->env->getExtension("native_profiler");
        $__internal_093971abaae1f1b387db5b12a1c25df132495de102b1847991ff3c656cdaa65e->enter($__internal_093971abaae1f1b387db5b12a1c25df132495de102b1847991ff3c656cdaa65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 115
        echo "    <aside id=\"sidebar_left\" class=\"nano nano-primary affix\">

        <!-- Start: Sidebar Left Content -->
        <div class=\"sidebar-left-content nano-content\">

            <!-- Start: Sidebar Left Menu -->
            <ul class=\"nav sidebar-menu\">
                <li class=\"sidebar-label pt20\">Menu</li>
                <li>
                    <a href=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">
                        <span class=\"glyphicon glyphicon-home\"></span>
                        <span class=\"sidebar-title\">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("users");
        echo "\">
                        <span class=\"fa fa-users\"></span>
                        <span class=\"sidebar-title\">Users</span>
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <span class=\"fa fa-calendar\"></span>
                        <span class=\"sidebar-title\">Events</span>
                    </a>
                </li>

                <li class=\"sidebar-label pt20\">Settings</li>
                <li class=\"sidebar-proj\">
                    <a href=\"#projectOne\">
                        <span class=\"fa fa-dot-circle-o text-primary\"></span>
                        <span class=\"sidebar-title\">My Profile</span>
                    </a>
                </li>
                <li class=\"sidebar-proj\">
                    <a href=\"";
        // line 150
        echo $this->env->getExtension('routing')->getPath("update");
        echo "\">
                        <span class=\"fa fa-dot-circle-o text-info\"></span>
                        <span class=\"sidebar-title\">Edit Profile</span>
                    </a>
                </li>
                <li class=\"sidebar-proj\">
                    <a href=\"#projectTwo\">
                        <span class=\"fa fa-dot-circle-o text-danger\"></span>
                        <span class=\"sidebar-title\">Reset Password</span>
                    </a>
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
        
        $__internal_093971abaae1f1b387db5b12a1c25df132495de102b1847991ff3c656cdaa65e->leave($__internal_093971abaae1f1b387db5b12a1c25df132495de102b1847991ff3c656cdaa65e_prof);

    }

    // line 180
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_04fc3d43a4c771463c3d6cc924a8081ec8503e550ed032d3b8d6dacf3157ab30 = $this->env->getExtension("native_profiler");
        $__internal_04fc3d43a4c771463c3d6cc924a8081ec8503e550ed032d3b8d6dacf3157ab30->enter($__internal_04fc3d43a4c771463c3d6cc924a8081ec8503e550ed032d3b8d6dacf3157ab30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        // line 181
        echo "    <!-- Start: Content-Wrapper -->
    <section id=\"content_wrapper\">

        <!-- Start: Topbar-Dropdown -->
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
        
        $__internal_04fc3d43a4c771463c3d6cc924a8081ec8503e550ed032d3b8d6dacf3157ab30->leave($__internal_04fc3d43a4c771463c3d6cc924a8081ec8503e550ed032d3b8d6dacf3157ab30_prof);

    }

    // line 229
    public function block_body($context, array $blocks = array())
    {
        $__internal_e34e3f619e00e6356347ed4db392f5f4a54257dfbdb560ff61f87016104931e9 = $this->env->getExtension("native_profiler");
        $__internal_e34e3f619e00e6356347ed4db392f5f4a54257dfbdb560ff61f87016104931e9->enter($__internal_e34e3f619e00e6356347ed4db392f5f4a54257dfbdb560ff61f87016104931e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e34e3f619e00e6356347ed4db392f5f4a54257dfbdb560ff61f87016104931e9->leave($__internal_e34e3f619e00e6356347ed4db392f5f4a54257dfbdb560ff61f87016104931e9_prof);

    }

    // line 231
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5cdb35f291ab4adb89925202e04726f5fb89b2f292d468e9069a24e4ddada95e = $this->env->getExtension("native_profiler");
        $__internal_5cdb35f291ab4adb89925202e04726f5fb89b2f292d468e9069a24e4ddada95e->enter($__internal_5cdb35f291ab4adb89925202e04726f5fb89b2f292d468e9069a24e4ddada95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 232
        echo "<!-- jQuery -->
<script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery_ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<!-- Theme Javascript -->
<script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/utility/utility.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/demo/demo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 238
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
        
        $__internal_5cdb35f291ab4adb89925202e04726f5fb89b2f292d468e9069a24e4ddada95e->leave($__internal_5cdb35f291ab4adb89925202e04726f5fb89b2f292d468e9069a24e4ddada95e_prof);

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
        return array (  420 => 238,  416 => 237,  412 => 236,  407 => 234,  403 => 233,  400 => 232,  394 => 231,  383 => 229,  329 => 181,  323 => 180,  286 => 150,  263 => 130,  254 => 124,  243 => 115,  237 => 114,  221 => 103,  213 => 98,  149 => 37,  145 => 35,  139 => 34,  130 => 18,  125 => 16,  120 => 14,  115 => 12,  112 => 11,  106 => 10,  94 => 6,  83 => 280,  81 => 231,  78 => 230,  75 => 229,  72 => 180,  70 => 114,  66 => 112,  64 => 34,  59 => 31,  57 => 30,  45 => 20,  43 => 10,  36 => 6,  29 => 1,);
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
/*     <header class="navbar navbar-fixed-top bg-dark">*/
/*         <div class="navbar-branding">*/
/*             <a class="navbar-brand" href="{{ path('dashboard') }}">*/
/*                 <b>Kamp</b>Web*/
/*             </a>*/
/*             <span id="toggle_sidemenu_l" class="ad ad-lines"></span>*/
/*         </div>*/
/*         <ul class="nav navbar-nav navbar-left">*/
/* */
/*             <li>*/
/*                 <a class="topbar-menu-toggle" href="#">*/
/*                     <span class="ad ad-wand fs16"></span>*/
/*                 </a>*/
/*             </li>*/
/* */
/*         </ul>*/
/*         <ul class="nav navbar-nav navbar-right">*/
/*             <li class="dropdown">*/
/*                 <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                     <span class="ad ad-radio-tower fs18"></span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu media-list w350 animated animated-shorter fadeIn" role="menu">*/
/*                     <li class="dropdown-header">*/
/*                         <span class="dropdown-title"> Notifications</span>*/
/*                         <span class="label label-warning">12</span>*/
/*                     </li>*/
/*                     <li class="media">*/
/*                         <div class="media-body">*/
/*                             <h5 class="media-heading">Article*/
/*                                 <small class="text-muted">- 08/16/22</small>*/
/*                             </h5> Last Updated 36 days ago by*/
/*                             <a class="text-system" href="#"> Max </a>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li class="media">*/
/*                         <div class="media-body">*/
/*                             <h5 class="media-heading mv5">Article*/
/*                                 <small> - 08/16/22</small>*/
/*                             </h5>*/
/*                             Last Updated 36 days ago by*/
/*                             <a class="text-system" href="#"> Max </a>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li class="media">*/
/*                         <div class="media-body">*/
/*                             <h5 class="media-heading">Article*/
/*                                 <small class="text-muted">- 08/16/22</small>*/
/*                             </h5> Last Updated 36 days ago by*/
/*                             <a class="text-system" href="#"> Max </a>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li class="media">*/
/*                         <div class="media-body">*/
/*                             <h5 class="media-heading mv5">Article*/
/*                                 <small class="text-muted">- 08/16/22</small>*/
/*                             </h5> Last Updated 36 days ago by*/
/*                             <a class="text-system" href="#"> Max </a>*/
/*                         </div>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/* */
/*             <li class="dropdown">*/
/*                 <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown">  {{ app.user.fullname }}*/
/*                     <span class="caret caret-tp hidden-xs"></span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">*/
/*                     <li class="dropdown-footer">*/
/*                         <a href="{{ path('logout') }}" class="">*/
/*                             <span class="fa fa-power-off pr5"></span> Logout </a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/* */
/*         </ul>*/
/*     </header>*/
/*     {% endblock %}*/
/*     <!-- End: Header -->*/
/*     <!-- Start: Sidebar Left -->*/
/*     {% block sidebar %}*/
/*     <aside id="sidebar_left" class="nano nano-primary affix">*/
/* */
/*         <!-- Start: Sidebar Left Content -->*/
/*         <div class="sidebar-left-content nano-content">*/
/* */
/*             <!-- Start: Sidebar Left Menu -->*/
/*             <ul class="nav sidebar-menu">*/
/*                 <li class="sidebar-label pt20">Menu</li>*/
/*                 <li>*/
/*                     <a href="{{ path('dashboard') }}">*/
/*                         <span class="glyphicon glyphicon-home"></span>*/
/*                         <span class="sidebar-title">Dashboard</span>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="{{ path('users') }}">*/
/*                         <span class="fa fa-users"></span>*/
/*                         <span class="sidebar-title">Users</span>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#">*/
/*                         <span class="fa fa-calendar"></span>*/
/*                         <span class="sidebar-title">Events</span>*/
/*                     </a>*/
/*                 </li>*/
/* */
/*                 <li class="sidebar-label pt20">Settings</li>*/
/*                 <li class="sidebar-proj">*/
/*                     <a href="#projectOne">*/
/*                         <span class="fa fa-dot-circle-o text-primary"></span>*/
/*                         <span class="sidebar-title">My Profile</span>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="sidebar-proj">*/
/*                     <a href="{{ path('update') }}">*/
/*                         <span class="fa fa-dot-circle-o text-info"></span>*/
/*                         <span class="sidebar-title">Edit Profile</span>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="sidebar-proj">*/
/*                     <a href="#projectTwo">*/
/*                         <span class="fa fa-dot-circle-o text-danger"></span>*/
/*                         <span class="sidebar-title">Reset Password</span>*/
/*                     </a>*/
/*                 </li>*/
/* */
/*             </ul>*/
/*             <!-- End: Sidebar Menu -->*/
/* */
/*             <!-- Start: Sidebar Collapse Button -->*/
/*             <div class="sidebar-toggle-mini">*/
/*                 <a href="#">*/
/*                     <span class="fa fa-sign-out"></span>*/
/*                 </a>*/
/*             </div>*/
/*             <!-- End: Sidebar Collapse Button -->*/
/* */
/*         </div>*/
/*         <!-- End: Sidebar Left Content -->*/
/* */
/*     </aside>*/
/*     <!-- End: Sidebar Left -->*/
/*         <!------------------------------------------------------------ End: SIDEBAR LEFT CONTENT -------------------------------------------------------------->*/
/*     {% endblock %}*/
/*     {% block topbar %}*/
/*     <!-- Start: Content-Wrapper -->*/
/*     <section id="content_wrapper">*/
/* */
/*         <!-- Start: Topbar-Dropdown -->*/
/*         <div id="topbar-dropmenu">*/
/*             <div class="topbar-menu row">*/
/*                 <div class="col-xs-4 col-sm-2">*/
/*                     <a href="#" class="metro-tile">*/
/*                         <span class="glyphicon glyphicon-inbox"></span>*/
/*                         <span class="metro-title">Messages</span>*/
/*                     </a>*/
/*                 </div>*/
/*                 <div class="col-xs-4 col-sm-2">*/
/*                     <a href="#" class="metro-tile">*/
/*                         <span class="glyphicon glyphicon-user"></span>*/
/*                         <span class="metro-title">Users</span>*/
/*                     </a>*/
/*                 </div>*/
/*                 <div class="col-xs-4 col-sm-2">*/
/*                     <a href="#" class="metro-tile">*/
/*                         <span class="glyphicon glyphicon-headphones"></span>*/
/*                         <span class="metro-title">Support</span>*/
/*                     </a>*/
/*                 </div>*/
/*                 <div class="col-xs-4 col-sm-2">*/
/*                     <a href="#" class="metro-tile">*/
/*                         <span class="fa fa-gears"></span>*/
/*                         <span class="metro-title">Settings</span>*/
/*                     </a>*/
/*                 </div>*/
/*                 <div class="col-xs-4 col-sm-2">*/
/*                     <a href="#" class="metro-tile">*/
/*                         <span class="glyphicon glyphicon-facetime-video"></span>*/
/*                         <span class="metro-title">Videos</span>*/
/*                     </a>*/
/*                 </div>*/
/*                 <div class="col-xs-4 col-sm-2">*/
/*                     <a href="#" class="metro-tile">*/
/*                         <span class="glyphicon glyphicon-picture"></span>*/
/*                         <span class="metro-title">Pictures</span>*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- End: Topbar-Dropdown -->*/
/*         </section>*/
/*     <!-- End: Content-Wrapper -->*/
/*     {% endblock %}*/
/*     {% block body %}{% endblock %}*/
/* <!-- BEGIN: PAGE SCRIPTS -->*/
/* {% block javascripts %}*/
/* <!-- jQuery -->*/
/* <script src="{{ asset('assets/vendor/jquery/jquery-1.11.1.min.js') }}"></script>*/
/* <script src="{{ asset('assets/vendor/jquery/jquery_ui/jquery-ui.min.js') }}"></script>*/
/* <!-- Theme Javascript -->*/
/* <script src="{{ asset('assets/js/utility/utility.js') }}"></script>*/
/* <script src="{{ asset('assets/js/demo/demo.js') }}"></script>*/
/* <script src="{{ asset('assets/js/main.js') }}"></script>*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function() {*/
/* */
/*             "use strict";*/
/* */
/*             // Init Demo JS*/
/*             Demo.init();*/
/* */
/* */
/*             // Init Theme Core*/
/*             Core.init();*/
/* */
/* */
/*             // Init Widget Demo JS*/
/*             // demoHighCharts.init();*/
/* */
/*             // Because we are using Admin Panels we use the OnFinish*/
/*             // callback to activate the demoWidgets. It's smoother if*/
/*             // we let the panels be moved and organized before*/
/*             // filling them with content from various plugins*/
/* */
/*             // Init plugins used on this page*/
/*             // HighCharts, JvectorMap, Admin Panels*/
/* */
/*             // Init Admin Panels on widgets inside the ".admin-panels" container*/
/*             $('.admin-panels').adminpanel({*/
/*                 grid: '.admin-grid',*/
/*                 draggable: true,*/
/*                 preserveGrid: true,*/
/*                 // mobile: true,*/
/*                 onStart: function() {*/
/*                     // Do something before AdminPanels runs*/
/*                 },*/
/*                 onSave: function() {*/
/*                     $(window).trigger('resize');*/
/*                 }*/
/*             });*/
/*         });*/
/*     </script>*/
/* <!-- END: PAGE SCRIPTS -->*/
/* {% endblock %}*/
/*     </div>*/
/* </body>*/
/* */
/* </html>*/
/* */
