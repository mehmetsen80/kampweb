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
        $__internal_65f445d5ab8a8245dd96452c16b2f5dd08c2a743798e621bcc48f295b0249808 = $this->env->getExtension("native_profiler");
        $__internal_65f445d5ab8a8245dd96452c16b2f5dd08c2a743798e621bcc48f295b0249808->enter($__internal_65f445d5ab8a8245dd96452c16b2f5dd08c2a743798e621bcc48f295b0249808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65f445d5ab8a8245dd96452c16b2f5dd08c2a743798e621bcc48f295b0249808->leave($__internal_65f445d5ab8a8245dd96452c16b2f5dd08c2a743798e621bcc48f295b0249808_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3dad7cc741028770ae009101248f1978dc67e0d325ed4ef9b0f88906f486f50f = $this->env->getExtension("native_profiler");
        $__internal_3dad7cc741028770ae009101248f1978dc67e0d325ed4ef9b0f88906f486f50f->enter($__internal_3dad7cc741028770ae009101248f1978dc67e0d325ed4ef9b0f88906f486f50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
    <!-- Main Style -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/skin/default_skin/css/theme.css"), "html", null, true);
        echo "\">
    <!--Icon Fonts-->
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/fonts/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

";
        
        $__internal_3dad7cc741028770ae009101248f1978dc67e0d325ed4ef9b0f88906f486f50f->leave($__internal_3dad7cc741028770ae009101248f1978dc67e0d325ed4ef9b0f88906f486f50f_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_8713ed9bbaf018638fa517b0f7a350bf4e8af6933e6aea4e7475d0d16bf01b6c = $this->env->getExtension("native_profiler");
        $__internal_8713ed9bbaf018638fa517b0f7a350bf4e8af6933e6aea4e7475d0d16bf01b6c->enter($__internal_8713ed9bbaf018638fa517b0f7a350bf4e8af6933e6aea4e7475d0d16bf01b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <body class=\"error-page sb-l-o sb-r-c\">
    <!-- Start: Content-Wrapper -->
    <section id=\"content_wrapper\">
        <section id=\"content\" class=\"pn animated fadeIn\">

            <div class=\"center-block mt50 mw800\">
                <h1 class=\"error-title\"> ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " </h1>
                <h2 class=\"error-subtitle\">An error occured</h2>
                <h4 class=\"text-muted\">The server returned a \"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\".
                    Please contact your system administration or <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">try again</a></h4>
                <div class=\"pull-left\">
                    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/logos/logo_grey.png"), "html", null, true);
        echo "\" class=\"img-responsive mt20 w225\" alt=\"logo\">
                </div>
            </div>
        </section>
        <!-- End: Content -->

    </section>
    </body>

";
        
        $__internal_8713ed9bbaf018638fa517b0f7a350bf4e8af6933e6aea4e7475d0d16bf01b6c->leave($__internal_8713ed9bbaf018638fa517b0f7a350bf4e8af6933e6aea4e7475d0d16bf01b6c_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fe7eeeac29f63de0c319930ae4b1ff17f2827c3de62d68fde61c687f82bd5e8e = $this->env->getExtension("native_profiler");
        $__internal_fe7eeeac29f63de0c319930ae4b1ff17f2827c3de62d68fde61c687f82bd5e8e->enter($__internal_fe7eeeac29f63de0c319930ae4b1ff17f2827c3de62d68fde61c687f82bd5e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery_ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Theme Javascript -->
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/utility/utility.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/demo/demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 43
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
        
        $__internal_fe7eeeac29f63de0c319930ae4b1ff17f2827c3de62d68fde61c687f82bd5e8e->leave($__internal_fe7eeeac29f63de0c319930ae4b1ff17f2827c3de62d68fde61c687f82bd5e8e_prof);

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
        return array (  138 => 43,  134 => 42,  130 => 41,  124 => 38,  120 => 37,  117 => 36,  111 => 35,  94 => 25,  89 => 23,  83 => 22,  78 => 20,  70 => 14,  64 => 13,  51 => 7,  46 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends '::default.html.twig' %}*/
/* {% block stylesheets %}*/
/* */
/*     <!-- Main Style -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/skin/default_skin/css/theme.css') }}">*/
/*     <!--Icon Fonts-->*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('assets/fonts/font-awesome/css/font-awesome.css') }}">*/
/* */
/*     <!-- Font CSS (Via CDN) -->*/
/*     <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/*     <body class="error-page sb-l-o sb-r-c">*/
/*     <!-- Start: Content-Wrapper -->*/
/*     <section id="content_wrapper">*/
/*         <section id="content" class="pn animated fadeIn">*/
/* */
/*             <div class="center-block mt50 mw800">*/
/*                 <h1 class="error-title"> {{ status_code }} </h1>*/
/*                 <h2 class="error-subtitle">An error occured</h2>*/
/*                 <h4 class="text-muted">The server returned a "{{ status_code }} {{ status_text }}".*/
/*                     Please contact your system administration or <a href="{{ path('homepage') }}">try again</a></h4>*/
/*                 <div class="pull-left">*/
/*                     <img src="{{ asset('assets/img/logos/logo_grey.png') }}" class="img-responsive mt20 w225" alt="logo">*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*         <!-- End: Content -->*/
/* */
/*     </section>*/
/*     </body>*/
/* */
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     <!-- jQuery -->*/
/*     <script src="{{ asset('assets/vendor/jquery/jquery-1.11.1.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/vendor/jquery/jquery_ui/jquery-ui.min.js') }}"></script>*/
/* */
/*     <!-- Theme Javascript -->*/
/*     <script src="{{ asset('assets/js/utility/utility.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/demo/demo.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/main.js') }}"></script>*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function() {*/
/* */
/*             "use strict";*/
/* */
/*             // Init Theme Core*/
/*             Core.init();*/
/* */
/*             // Init Demo JS*/
/*             Demo.init();*/
/* */
/*         });*/
/*     </script>*/
/*     <!-- END: PAGE SCRIPTS -->*/
/* */
/* */
/* {% endblock %}*/
