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
        $__internal_1d8482f9a7a34ac4deb4dae7504413365fa144ed016ed6d28ab206362301b4dc = $this->env->getExtension("native_profiler");
        $__internal_1d8482f9a7a34ac4deb4dae7504413365fa144ed016ed6d28ab206362301b4dc->enter($__internal_1d8482f9a7a34ac4deb4dae7504413365fa144ed016ed6d28ab206362301b4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::default.html.twig"));

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
        // line 142
        echo "    <!-- End: Header -->
    <!-- Start: Sidebar Left -->
    ";
        // line 144
        $this->displayBlock('sidebar', $context, $blocks);
        // line 226
        echo "    ";
        $this->displayBlock('topbar', $context, $blocks);
        // line 282
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 283
        echo "    <!-- BEGIN: PAGE SCRIPTS -->
    ";
        // line 284
        $this->displayBlock('javascripts', $context, $blocks);
        // line 333
        echo "</div>
</body>

</html>
";
        
        $__internal_1d8482f9a7a34ac4deb4dae7504413365fa144ed016ed6d28ab206362301b4dc->leave($__internal_1d8482f9a7a34ac4deb4dae7504413365fa144ed016ed6d28ab206362301b4dc_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2de4b5ef4b9b129708c8190bf0976cf2068759a3c7efc71ba668bf17ff933b79 = $this->env->getExtension("native_profiler");
        $__internal_2de4b5ef4b9b129708c8190bf0976cf2068759a3c7efc71ba668bf17ff933b79->enter($__internal_2de4b5ef4b9b129708c8190bf0976cf2068759a3c7efc71ba668bf17ff933b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "North American University";
        
        $__internal_2de4b5ef4b9b129708c8190bf0976cf2068759a3c7efc71ba668bf17ff933b79->leave($__internal_2de4b5ef4b9b129708c8190bf0976cf2068759a3c7efc71ba668bf17ff933b79_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f959998d32d7c895e9438c8e5c7eed6320f69b557bc45e550c13e823c21473e1 = $this->env->getExtension("native_profiler");
        $__internal_f959998d32d7c895e9438c8e5c7eed6320f69b557bc45e550c13e823c21473e1->enter($__internal_f959998d32d7c895e9438c8e5c7eed6320f69b557bc45e550c13e823c21473e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f959998d32d7c895e9438c8e5c7eed6320f69b557bc45e550c13e823c21473e1->leave($__internal_f959998d32d7c895e9438c8e5c7eed6320f69b557bc45e550c13e823c21473e1_prof);

    }

    // line 34
    public function block_header($context, array $blocks = array())
    {
        $__internal_60987270d2500cc20af7f285c46d0e8ba2af1a676b32820a3d40207cd8d9be3e = $this->env->getExtension("native_profiler");
        $__internal_60987270d2500cc20af7f285c46d0e8ba2af1a676b32820a3d40207cd8d9be3e->enter($__internal_60987270d2500cc20af7f285c46d0e8ba2af1a676b32820a3d40207cd8d9be3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "fullname", array()), "html", null, true);
        echo "
                        <span class=\"caret caret-tp hidden-xs\"></span>
                    </a>
                    <ul class=\"dropdown-menu list-group dropdown-persist w250\" role=\"menu\">
                        <li class=\"list-group-item\">
                            ";
        // line 109
        if (((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array())) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array())))) {
            // line 110
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("update");
            echo "\" class=\"animated animated-short fadeInUp\">
                                    <span class=\"fa fa-user\"></span> My Profile  </a>
                                </a>
                            ";
        } else {
            // line 114
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profile", array("userid" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\" class=\"animated animated-short fadeInUp\">
                                    <span class=\"fa fa-user\"></span> My Profile  </a>
                                </a>
                            ";
        }
        // line 118
        echo "                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"";
        // line 120
        echo $this->env->getExtension('routing')->getPath("update");
        echo "\" class=\"animated animated-short fadeInUp\">
                                <span class=\"fa fa-gear\"></span> Edit Profile </a>
                        </li>
                        <li class=\"list-group-item\">
                            ";
        // line 124
        if (((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array())) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array())))) {
            // line 125
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("update");
            echo "\" class=\"animated animated-short fadeInUp\">
                                    <span class=\"fa fa-shield\"></span> Change Password  </a>
                            ";
        } else {
            // line 128
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("changepassword");
            echo "\" class=\"animated animated-short fadeInUp\">
                                    <span class=\"fa fa-shield\"></span> Change Password  </a>
                            ";
        }
        // line 131
        echo "                        </li>
                        <li class=\"dropdown-footer\">
                            <a href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" class=\"\">
                                <span class=\"fa fa-power-off pr5\"></span> Logout </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </header>
    ";
        
        $__internal_60987270d2500cc20af7f285c46d0e8ba2af1a676b32820a3d40207cd8d9be3e->leave($__internal_60987270d2500cc20af7f285c46d0e8ba2af1a676b32820a3d40207cd8d9be3e_prof);

    }

    // line 144
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_146254893cbe59f030392d3820bc0bdc10de86a2288e02c20bd676deda900f18 = $this->env->getExtension("native_profiler");
        $__internal_146254893cbe59f030392d3820bc0bdc10de86a2288e02c20bd676deda900f18->enter($__internal_146254893cbe59f030392d3820bc0bdc10de86a2288e02c20bd676deda900f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 145
        echo "        <aside id=\"sidebar_left\" class=\"nano nano-primary affix\">

            <!-- Start: Sidebar Left Content -->
            <div class=\"sidebar-left-content nano-content\">

                <!-- Start: Sidebar Left Menu -->
                <ul class=\"nav sidebar-menu\">
                    <li class=\"sidebar-label pt20\">Menu</li>
                    <li>
                        ";
        // line 154
        if (((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array())) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array())))) {
            // line 155
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("update");
            echo "\">
                            <span class=\"glyphicon glyphicon-home\"></span>
                            <span class=\"sidebar-title\">Dashboard</span>
                        </a>
                        ";
        } else {
            // line 160
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("dashboard");
            echo "\">
                            <span class=\"glyphicon glyphicon-home\"></span>
                            <span class=\"sidebar-title\">Dashboard</span>
                        </a>
                        ";
        }
        // line 165
        echo "                    </li>
                    <li>
                        ";
        // line 167
        if (((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array())) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array())))) {
            // line 168
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("update");
            echo "\">
                                <span class=\"fa fa-users\"></span>
                                <span class=\"sidebar-title\">Users</span>
                        </a>
                        ";
        } else {
            // line 173
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("users");
            echo "\">
                            <span class=\"fa fa-users\"></span>
                            <span class=\"sidebar-title\">Users</span>
                        </a>
                        ";
        }
        // line 178
        echo "                    </li>
                    <li>
                        ";
        // line 180
        if (((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array())) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array())))) {
            // line 181
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("update");
            echo "\">
                            <span class=\"fa fa-calendar\"></span>
                            <span class=\"sidebar-title\">Events</span>
                        </a>
                        ";
        } else {
            // line 186
            echo "                        <a class=\"accordion-toggle\" href=\"#\">
                            <span class=\"fa fa-calendar\"></span>
                            <span class=\"sidebar-title\">Events</span>
                        </a>
                        ";
        }
        // line 191
        echo "                        <ul class=\"nav sub-nav\">
                            <li>
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-book\"></span> Event List </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 197
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
        
        $__internal_146254893cbe59f030392d3820bc0bdc10de86a2288e02c20bd676deda900f18->leave($__internal_146254893cbe59f030392d3820bc0bdc10de86a2288e02c20bd676deda900f18_prof);

    }

    // line 226
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_8b2701aaaf056cef6752ca9d1bd6a2927e89708e7ca940e6c117d4995fa835b1 = $this->env->getExtension("native_profiler");
        $__internal_8b2701aaaf056cef6752ca9d1bd6a2927e89708e7ca940e6c117d4995fa835b1->enter($__internal_8b2701aaaf056cef6752ca9d1bd6a2927e89708e7ca940e6c117d4995fa835b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        // line 227
        echo "        <!-- Start: Content-Wrapper -->
        <section id=\"content_wrapper\">
            ";
        // line 229
        if (((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array())) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array())))) {
            // line 230
            echo "            <div class=\"alert alert-danger alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <i class=\"fa fa-exclamation-triangle pr10\"></i>
                <strong>You profile is incomplete!</strong>
                <a href=\"";
            // line 234
            echo $this->env->getExtension('routing')->getPath("update");
            echo "\" class=\"alert-link\">Complete your profile here!</a>
            </div>
            ";
        }
        // line 237
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
        
        $__internal_8b2701aaaf056cef6752ca9d1bd6a2927e89708e7ca940e6c117d4995fa835b1->leave($__internal_8b2701aaaf056cef6752ca9d1bd6a2927e89708e7ca940e6c117d4995fa835b1_prof);

    }

    // line 282
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e4d70eb4e0801024c17afa4916251a83d13de77d18e5636804cd289842fe178 = $this->env->getExtension("native_profiler");
        $__internal_9e4d70eb4e0801024c17afa4916251a83d13de77d18e5636804cd289842fe178->enter($__internal_9e4d70eb4e0801024c17afa4916251a83d13de77d18e5636804cd289842fe178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9e4d70eb4e0801024c17afa4916251a83d13de77d18e5636804cd289842fe178->leave($__internal_9e4d70eb4e0801024c17afa4916251a83d13de77d18e5636804cd289842fe178_prof);

    }

    // line 284
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be549c5129df70861f587c4ce09de594b5ffdf9b396d2ff983870e2686ec0b6a = $this->env->getExtension("native_profiler");
        $__internal_be549c5129df70861f587c4ce09de594b5ffdf9b396d2ff983870e2686ec0b6a->enter($__internal_be549c5129df70861f587c4ce09de594b5ffdf9b396d2ff983870e2686ec0b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 285
        echo "        <!-- jQuery -->
        <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery_ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Theme Javascript -->
        <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/utility/utility.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/demo/demo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 291
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
        
        $__internal_be549c5129df70861f587c4ce09de594b5ffdf9b396d2ff983870e2686ec0b6a->leave($__internal_be549c5129df70861f587c4ce09de594b5ffdf9b396d2ff983870e2686ec0b6a_prof);

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
        return array (  539 => 291,  535 => 290,  531 => 289,  526 => 287,  522 => 286,  519 => 285,  513 => 284,  502 => 282,  451 => 237,  445 => 234,  439 => 230,  437 => 229,  433 => 227,  427 => 226,  391 => 197,  383 => 191,  376 => 186,  367 => 181,  365 => 180,  361 => 178,  352 => 173,  343 => 168,  341 => 167,  337 => 165,  328 => 160,  319 => 155,  317 => 154,  306 => 145,  300 => 144,  284 => 133,  280 => 131,  273 => 128,  266 => 125,  264 => 124,  257 => 120,  253 => 118,  245 => 114,  237 => 110,  235 => 109,  227 => 104,  167 => 46,  159 => 42,  151 => 38,  149 => 37,  145 => 35,  139 => 34,  130 => 18,  125 => 16,  120 => 14,  115 => 12,  112 => 11,  106 => 10,  94 => 6,  83 => 333,  81 => 284,  78 => 283,  75 => 282,  72 => 226,  70 => 144,  66 => 142,  64 => 34,  59 => 31,  57 => 30,  45 => 20,  43 => 10,  36 => 6,  29 => 1,);
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
/*                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                         <span class="ad ad-radio-tower fs18"></span>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu media-list w350 animated animated-shorter fadeIn" role="menu">*/
/*                         <li class="dropdown-header">*/
/*                             <span class="dropdown-title"> Notifications</span>*/
/*                             <span class="label label-warning">12</span>*/
/*                         </li>*/
/*                         <li class="media">*/
/*                             <div class="media-body">*/
/*                                 <h5 class="media-heading">Article*/
/*                                     <small class="text-muted">- 08/16/22</small>*/
/*                                 </h5> Last Updated 36 days ago by*/
/*                                 <a class="text-system" href="#"> Max </a>*/
/*                             </div>*/
/*                         </li>*/
/*                         <li class="media">*/
/*                             <div class="media-body">*/
/*                                 <h5 class="media-heading mv5">Article*/
/*                                     <small> - 08/16/22</small>*/
/*                                 </h5>*/
/*                                 Last Updated 36 days ago by*/
/*                                 <a class="text-system" href="#"> Max </a>*/
/*                             </div>*/
/*                         </li>*/
/*                         <li class="media">*/
/*                             <div class="media-body">*/
/*                                 <h5 class="media-heading">Article*/
/*                                     <small class="text-muted">- 08/16/22</small>*/
/*                                 </h5> Last Updated 36 days ago by*/
/*                                 <a class="text-system" href="#"> Max </a>*/
/*                             </div>*/
/*                         </li>*/
/*                         <li class="media">*/
/*                             <div class="media-body">*/
/*                                 <h5 class="media-heading mv5">Article*/
/*                                     <small class="text-muted">- 08/16/22</small>*/
/*                                 </h5> Last Updated 36 days ago by*/
/*                                 <a class="text-system" href="#"> Max </a>*/
/*                             </div>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/* */
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
