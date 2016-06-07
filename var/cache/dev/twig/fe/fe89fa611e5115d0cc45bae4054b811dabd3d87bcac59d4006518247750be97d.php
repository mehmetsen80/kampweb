<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_97cc2da4b4b7aedf0e3763663c8351b003ccf0a494973b0474edb916a376f2a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::default.html.twig", "TwigBundle:Exception:error.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b271aa915cc7202bd4b0ad1427fded15c2510166d96f4bbff58d8cebedb016cd = $this->env->getExtension("native_profiler");
        $__internal_b271aa915cc7202bd4b0ad1427fded15c2510166d96f4bbff58d8cebedb016cd->enter($__internal_b271aa915cc7202bd4b0ad1427fded15c2510166d96f4bbff58d8cebedb016cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b271aa915cc7202bd4b0ad1427fded15c2510166d96f4bbff58d8cebedb016cd->leave($__internal_b271aa915cc7202bd4b0ad1427fded15c2510166d96f4bbff58d8cebedb016cd_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_44402064d040d8389a9fccdb4cdf497e22013e5fdb4f45b3f4593ce65575d50c = $this->env->getExtension("native_profiler");
        $__internal_44402064d040d8389a9fccdb4cdf497e22013e5fdb4f45b3f4593ce65575d50c->enter($__internal_44402064d040d8389a9fccdb4cdf497e22013e5fdb4f45b3f4593ce65575d50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

    <!-- Theme CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/skin/default_skin/css/theme.css"), "html", null, true);
        echo "\">
";
        
        $__internal_44402064d040d8389a9fccdb4cdf497e22013e5fdb4f45b3f4593ce65575d50c->leave($__internal_44402064d040d8389a9fccdb4cdf497e22013e5fdb4f45b3f4593ce65575d50c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0fa732ba910611b9afadbb0f3c842e4388423383af64f26da91398c7ab03afe = $this->env->getExtension("native_profiler");
        $__internal_b0fa732ba910611b9afadbb0f3c842e4388423383af64f26da91398c7ab03afe->enter($__internal_b0fa732ba910611b9afadbb0f3c842e4388423383af64f26da91398c7ab03afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <body class=\"error-page sb-l-o sb-r-c\">

    <!-- Start: Main -->
    <div id=\"main\">

        <!-- Start: Content-Wrapper -->
        <section id=\"content_wrapper\">
            <!-- Begin: Content -->
            <section id=\"content\" class=\"pn animated fadeIn\">

                <div class=\"center-block mt50 mw800 animated fadeIn\">
                    <h1 class=\"error-title\"> 500! </h1>
                    <h2 class=\"error-subtitle\">Internal Server Error.</h2>
                </div>

                <div class=\"mid-section animated fadeIn\">
                    <div class=\"mid-content clearfix\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Ask me a question!\" value=\"Ask me a question!\">
                        <div class=\"pull-left\">
                            <img src=\"assets/img/logos/logo_grey.png\" class=\"img-responsive mt20 w225\" alt=\"logo\">
                        </div>

                    </div>
                </div>

            </section>
            <!-- End: Content -->

        </section>

    </div>
    <!-- End: Main -->
    ";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "    </body>

";
        
        $__internal_b0fa732ba910611b9afadbb0f3c842e4388423383af64f26da91398c7ab03afe->leave($__internal_b0fa732ba910611b9afadbb0f3c842e4388423383af64f26da91398c7ab03afe_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_587d1fb0ae73ebcb1648b568850f74f4ef585be97a26c935497bb1ca3842b509 = $this->env->getExtension("native_profiler");
        $__internal_587d1fb0ae73ebcb1648b568850f74f4ef585be97a26c935497bb1ca3842b509->enter($__internal_587d1fb0ae73ebcb1648b568850f74f4ef585be97a26c935497bb1ca3842b509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery_ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Theme Javascript -->
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/utility/utility.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/demo/demo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            jQuery(document).ready(function() {

                \"use strict\";

                // Init Theme Core
                Core.init();

                // Init Demo JS
                Demo.init();

            });
        </script>
        <!-- END: PAGE SCRIPTS -->
    ";
        
        $__internal_587d1fb0ae73ebcb1648b568850f74f4ef585be97a26c935497bb1ca3842b509->leave($__internal_587d1fb0ae73ebcb1648b568850f74f4ef585be97a26c935497bb1ca3842b509_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 49,  129 => 48,  125 => 47,  119 => 44,  114 => 43,  108 => 42,  99 => 65,  97 => 42,  63 => 10,  57 => 9,  48 => 7,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends '::default.html.twig' %}*/
/* {% block stylesheets %}*/
/*     <!-- Font CSS (Via CDN) -->*/
/*     <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>*/
/* */
/*     <!-- Theme CSS -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/skin/default_skin/css/theme.css') }}">*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <body class="error-page sb-l-o sb-r-c">*/
/* */
/*     <!-- Start: Main -->*/
/*     <div id="main">*/
/* */
/*         <!-- Start: Content-Wrapper -->*/
/*         <section id="content_wrapper">*/
/*             <!-- Begin: Content -->*/
/*             <section id="content" class="pn animated fadeIn">*/
/* */
/*                 <div class="center-block mt50 mw800 animated fadeIn">*/
/*                     <h1 class="error-title"> 500! </h1>*/
/*                     <h2 class="error-subtitle">Internal Server Error.</h2>*/
/*                 </div>*/
/* */
/*                 <div class="mid-section animated fadeIn">*/
/*                     <div class="mid-content clearfix">*/
/*                         <input type="text" class="form-control" placeholder="Ask me a question!" value="Ask me a question!">*/
/*                         <div class="pull-left">*/
/*                             <img src="assets/img/logos/logo_grey.png" class="img-responsive mt20 w225" alt="logo">*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/*             </section>*/
/*             <!-- End: Content -->*/
/* */
/*         </section>*/
/* */
/*     </div>*/
/*     <!-- End: Main -->*/
/*     {% block javascripts %}*/
/*         <script src="{{ asset('assets/vendor/jquery/jquery-1.11.1.min.js') }}"></script>*/
/*         <script src="{{ asset('assets/vendor/jquery/jquery_ui/jquery-ui.min.js') }}"></script>*/
/* */
/*         <!-- Theme Javascript -->*/
/*         <script src="{{ asset('assets/js/utility/utility.js') }}"></script>*/
/*         <script src="{{ asset('assets/js/demo/demo.js') }}"></script>*/
/*         <script src="{{ asset('assets/js/main.js') }}"></script>*/
/*         <script type="text/javascript">*/
/*             jQuery(document).ready(function() {*/
/* */
/*                 "use strict";*/
/* */
/*                 // Init Theme Core*/
/*                 Core.init();*/
/* */
/*                 // Init Demo JS*/
/*                 Demo.init();*/
/* */
/*             });*/
/*         </script>*/
/*         <!-- END: PAGE SCRIPTS -->*/
/*     {% endblock %}*/
/*     </body>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
