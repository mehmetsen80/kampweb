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
        $__internal_6225ad1d109ca1b405685a8c5635c5d6dbe4d680e7e7c70b2dd2185a9b14e8d5 = $this->env->getExtension("native_profiler");
        $__internal_6225ad1d109ca1b405685a8c5635c5d6dbe4d680e7e7c70b2dd2185a9b14e8d5->enter($__internal_6225ad1d109ca1b405685a8c5635c5d6dbe4d680e7e7c70b2dd2185a9b14e8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::default.html.twig"));

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
        // line 104
        echo "    <!-- End: Header -->
    <!-- Start: Sidebar Left -->
    ";
        // line 106
        $this->displayBlock('sidebar', $context, $blocks);
        // line 188
        echo "    ";
        $this->displayBlock('topbar', $context, $blocks);
        // line 244
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 245
        echo "    <!-- BEGIN: PAGE SCRIPTS -->
    ";
        // line 246
        $this->displayBlock('javascripts', $context, $blocks);
        // line 301
        echo "</div>


</html>
";
        
        $__internal_6225ad1d109ca1b405685a8c5635c5d6dbe4d680e7e7c70b2dd2185a9b14e8d5->leave($__internal_6225ad1d109ca1b405685a8c5635c5d6dbe4d680e7e7c70b2dd2185a9b14e8d5_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_78cf3b14fbd092b8e720eb76a94c8b52113d6c611b304e43bf94db4c14ed7be2 = $this->env->getExtension("native_profiler");
        $__internal_78cf3b14fbd092b8e720eb76a94c8b52113d6c611b304e43bf94db4c14ed7be2->enter($__internal_78cf3b14fbd092b8e720eb76a94c8b52113d6c611b304e43bf94db4c14ed7be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "North American University";
        
        $__internal_78cf3b14fbd092b8e720eb76a94c8b52113d6c611b304e43bf94db4c14ed7be2->leave($__internal_78cf3b14fbd092b8e720eb76a94c8b52113d6c611b304e43bf94db4c14ed7be2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0f62f0309a01648e2931b0931909853414eeec739d44e96a49a57e4544dc1e7d = $this->env->getExtension("native_profiler");
        $__internal_0f62f0309a01648e2931b0931909853414eeec739d44e96a49a57e4544dc1e7d->enter($__internal_0f62f0309a01648e2931b0931909853414eeec739d44e96a49a57e4544dc1e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0f62f0309a01648e2931b0931909853414eeec739d44e96a49a57e4544dc1e7d->leave($__internal_0f62f0309a01648e2931b0931909853414eeec739d44e96a49a57e4544dc1e7d_prof);

    }

    // line 33
    public function block_header($context, array $blocks = array())
    {
        $__internal_335ea126b169efbf1f22b0f49abe9d1d36d155c2bf64ffa8c7984210d3dd7c3c = $this->env->getExtension("native_profiler");
        $__internal_335ea126b169efbf1f22b0f49abe9d1d36d155c2bf64ffa8c7984210d3dd7c3c->enter($__internal_335ea126b169efbf1f22b0f49abe9d1d36d155c2bf64ffa8c7984210d3dd7c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
            ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "passwordchange"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 95
            echo "                <div class=\"alert alert-danger alert-dismissable\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                    <i class=\"fa fa-exclamation-triangle pr10\"></i>
                    <strong>Your password is too weak!</strong>
                    <a href=\"";
            // line 99
            echo $this->env->getExtension('routing')->getPath("changepassword");
            echo "\" class=\"alert-link\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "        </header>
    ";
        
        $__internal_335ea126b169efbf1f22b0f49abe9d1d36d155c2bf64ffa8c7984210d3dd7c3c->leave($__internal_335ea126b169efbf1f22b0f49abe9d1d36d155c2bf64ffa8c7984210d3dd7c3c_prof);

    }

    // line 106
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fd39f8d3114bf54a3f56386e211c7a2e3e70b75e0db36688d3807f5603e33516 = $this->env->getExtension("native_profiler");
        $__internal_fd39f8d3114bf54a3f56386e211c7a2e3e70b75e0db36688d3807f5603e33516->enter($__internal_fd39f8d3114bf54a3f56386e211c7a2e3e70b75e0db36688d3807f5603e33516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 107
        echo "        <aside id=\"sidebar_left\" class=\"nano nano-primary affix\">

            <!-- Start: Sidebar Left Content -->
            <div class=\"sidebar-left-content nano-content\">

                <!-- Start: Sidebar Left Menu -->
                <ul class=\"nav sidebar-menu\">
                    <li class=\"sidebar-label pt20\">Menu</li>
                    <li>
                        ";
        // line 116
        if (((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array())) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array())))) {
            // line 117
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("update");
            echo "\">
                            <span class=\"glyphicon glyphicon-home\"></span>
                            <span class=\"sidebar-title\">Dashboard</span>
                        </a>
                        ";
        } else {
            // line 122
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("dashboard");
            echo "\">
                            <span class=\"glyphicon glyphicon-home\"></span>
                            <span class=\"sidebar-title\">Dashboard</span>
                        </a>
                        ";
        }
        // line 127
        echo "                    </li>
                    <li>
                        ";
        // line 129
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 130
            echo "                            ";
            if (((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array())) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array())))) {
                // line 131
                echo "                            <a href=\"";
                echo $this->env->getExtension('routing')->getPath("update");
                echo "\">
                                    <span class=\"fa fa-users\"></span>
                                    <span class=\"sidebar-title\">Users</span>
                            </a>
                            ";
            } else {
                // line 136
                echo "                            <a href=\"";
                echo $this->env->getExtension('routing')->getPath("users");
                echo "\">
                                <span class=\"fa fa-users\"></span>
                                <span class=\"sidebar-title\">Users</span>
                            </a>
                            ";
            }
            // line 141
            echo "                        ";
        }
        // line 142
        echo "                    </li>
                    <li>
                        ";
        // line 144
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 145
            echo "                            ";
            if (((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array())) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array())))) {
                // line 146
                echo "                            <a href=\"";
                echo $this->env->getExtension('routing')->getPath("update");
                echo "\">
                                <span class=\"fa fa-calendar\"></span>
                                <span class=\"sidebar-title\">Events</span>
                            </a>
                            ";
            } else {
                // line 151
                echo "                            <a class=\"accordion-toggle\" href=\"#\">
                                <span class=\"fa fa-calendar\"></span>
                                <span class=\"sidebar-title\">Events</span>
                            </a>
                            ";
            }
            // line 156
            echo "                        ";
        }
        // line 157
        echo "                        <ul class=\"nav sub-nav\">
                            <li>
                                <a href=\"#\">
                                    <span class=\"glyphicon glyphicon-book\"></span> Event List </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 163
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
        
        $__internal_fd39f8d3114bf54a3f56386e211c7a2e3e70b75e0db36688d3807f5603e33516->leave($__internal_fd39f8d3114bf54a3f56386e211c7a2e3e70b75e0db36688d3807f5603e33516_prof);

    }

    // line 188
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_5c075461edfbcd922dfa1957d033297016bfdf2df8b3cde9412eecb51ef43bd6 = $this->env->getExtension("native_profiler");
        $__internal_5c075461edfbcd922dfa1957d033297016bfdf2df8b3cde9412eecb51ef43bd6->enter($__internal_5c075461edfbcd922dfa1957d033297016bfdf2df8b3cde9412eecb51ef43bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        // line 189
        echo "        <!-- Start: Content-Wrapper -->
        <section id=\"content_wrapper\">
            ";
        // line 191
        if (((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array())) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "cellphone", array()))) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array())))) {
            // line 192
            echo "            <div class=\"alert alert-danger alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <i class=\"fa fa-exclamation-triangle pr10\"></i>
                <strong>You profile is incomplete!</strong>
                <a href=\"";
            // line 196
            echo $this->env->getExtension('routing')->getPath("update");
            echo "\" class=\"alert-link\">Complete your profile here!</a>
            </div>
            ";
        }
        // line 199
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
        
        $__internal_5c075461edfbcd922dfa1957d033297016bfdf2df8b3cde9412eecb51ef43bd6->leave($__internal_5c075461edfbcd922dfa1957d033297016bfdf2df8b3cde9412eecb51ef43bd6_prof);

    }

    // line 244
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0bfdd1a742fa7cd62bc7ca4e681087dab82ba991d6c175908bee2da4e5ff6df = $this->env->getExtension("native_profiler");
        $__internal_f0bfdd1a742fa7cd62bc7ca4e681087dab82ba991d6c175908bee2da4e5ff6df->enter($__internal_f0bfdd1a742fa7cd62bc7ca4e681087dab82ba991d6c175908bee2da4e5ff6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f0bfdd1a742fa7cd62bc7ca4e681087dab82ba991d6c175908bee2da4e5ff6df->leave($__internal_f0bfdd1a742fa7cd62bc7ca4e681087dab82ba991d6c175908bee2da4e5ff6df_prof);

    }

    // line 246
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_42327ca8c0bdfba2bfacc19bd829ca439d21042f6ba301f4382f275c1aef847b = $this->env->getExtension("native_profiler");
        $__internal_42327ca8c0bdfba2bfacc19bd829ca439d21042f6ba301f4382f275c1aef847b->enter($__internal_42327ca8c0bdfba2bfacc19bd829ca439d21042f6ba301f4382f275c1aef847b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 247
        echo "        <!-- jQuery -->
        <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery_ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Theme Javascript -->
        <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/utility/utility.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/demo/demo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 253
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
                text = text.replace(/(\\d{1})(\\d{1})(\\d{3})(\\d{4})/, \"\$1\$2-(\$3)-\$4\");
                return text;
            });
        </script>
        <!-- END: PAGE SCRIPTS -->
    ";
        
        $__internal_42327ca8c0bdfba2bfacc19bd829ca439d21042f6ba301f4382f275c1aef847b->leave($__internal_42327ca8c0bdfba2bfacc19bd829ca439d21042f6ba301f4382f275c1aef847b_prof);

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
        return array (  524 => 253,  520 => 252,  516 => 251,  511 => 249,  507 => 248,  504 => 247,  498 => 246,  487 => 244,  436 => 199,  430 => 196,  424 => 192,  422 => 191,  418 => 189,  412 => 188,  380 => 163,  372 => 157,  369 => 156,  362 => 151,  353 => 146,  350 => 145,  348 => 144,  344 => 142,  341 => 141,  332 => 136,  323 => 131,  320 => 130,  318 => 129,  314 => 127,  305 => 122,  296 => 117,  294 => 116,  283 => 107,  277 => 106,  269 => 102,  258 => 99,  252 => 95,  248 => 94,  238 => 87,  234 => 85,  227 => 82,  220 => 79,  218 => 78,  211 => 74,  207 => 72,  199 => 68,  191 => 64,  189 => 63,  181 => 58,  166 => 45,  158 => 41,  150 => 37,  148 => 36,  144 => 34,  138 => 33,  129 => 18,  124 => 16,  119 => 14,  114 => 12,  111 => 11,  105 => 10,  93 => 6,  82 => 301,  80 => 246,  77 => 245,  74 => 244,  71 => 188,  69 => 106,  65 => 104,  63 => 33,  58 => 30,  56 => 29,  45 => 20,  43 => 10,  36 => 6,  29 => 1,);
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
/*             {% for flash_message in app.session.flashBag.get('passwordchange') %}*/
/*                 <div class="alert alert-danger alert-dismissable">*/
/*                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*                     <i class="fa fa-exclamation-triangle pr10"></i>*/
/*                     <strong>Your password is too weak!</strong>*/
/*                     <a href="{{ path('changepassword') }}" class="alert-link">{{ flash_message }}</a>*/
/*                 </div>*/
/*             {% endfor %}*/
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
/*                 text = text.replace(/(\d{1})(\d{1})(\d{3})(\d{4})/, "$1$2-($3)-$4");*/
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
