<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_a2c228a773bd053bc6f68811978d7538cabc48f013010979c85ab3741aa36167 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::default.html.twig", "TwigBundle:Exception:error404.html.twig", 1);
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
        $__internal_b8765dbc21c6575f5b9714473fb0e127bd467ec014a2150fedaa83f7e9222770 = $this->env->getExtension("native_profiler");
        $__internal_b8765dbc21c6575f5b9714473fb0e127bd467ec014a2150fedaa83f7e9222770->enter($__internal_b8765dbc21c6575f5b9714473fb0e127bd467ec014a2150fedaa83f7e9222770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8765dbc21c6575f5b9714473fb0e127bd467ec014a2150fedaa83f7e9222770->leave($__internal_b8765dbc21c6575f5b9714473fb0e127bd467ec014a2150fedaa83f7e9222770_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ad3db5d81258382038faf6a105830166ee4503558230a7ae19b0a7b93ebaaeb2 = $this->env->getExtension("native_profiler");
        $__internal_ad3db5d81258382038faf6a105830166ee4503558230a7ae19b0a7b93ebaaeb2->enter($__internal_ad3db5d81258382038faf6a105830166ee4503558230a7ae19b0a7b93ebaaeb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ad3db5d81258382038faf6a105830166ee4503558230a7ae19b0a7b93ebaaeb2->leave($__internal_ad3db5d81258382038faf6a105830166ee4503558230a7ae19b0a7b93ebaaeb2_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea06c02eb31d8677dc67cbc48d457f1c779546cd6985ca915443d806824a0681 = $this->env->getExtension("native_profiler");
        $__internal_ea06c02eb31d8677dc67cbc48d457f1c779546cd6985ca915443d806824a0681->enter($__internal_ea06c02eb31d8677dc67cbc48d457f1c779546cd6985ca915443d806824a0681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <body class=\"error-page sb-l-o sb-r-c\">
<!-- Start: Content-Wrapper -->
<section id=\"content_wrapper\">
    <section id=\"content\" class=\"pn animated fadeIn\">

        <div class=\"center-block mt50 mw800\">
            <h1 class=\"error-title\"> 404! </h1>
            <h2 class=\"error-subtitle\">Page Not Found.</h2>
            <h4 class=\"text-muted\">The requested page couldn't be located. Checkout for any URL
                misspelling or <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">return to the homepage</a>.</h4>
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
        
        $__internal_ea06c02eb31d8677dc67cbc48d457f1c779546cd6985ca915443d806824a0681->leave($__internal_ea06c02eb31d8677dc67cbc48d457f1c779546cd6985ca915443d806824a0681_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7b9b145a7477de743af927bcfb661b61eac1b704ef616b4716d24d5b95660bfd = $this->env->getExtension("native_profiler");
        $__internal_7b9b145a7477de743af927bcfb661b61eac1b704ef616b4716d24d5b95660bfd->enter($__internal_7b9b145a7477de743af927bcfb661b61eac1b704ef616b4716d24d5b95660bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7b9b145a7477de743af927bcfb661b61eac1b704ef616b4716d24d5b95660bfd->leave($__internal_7b9b145a7477de743af927bcfb661b61eac1b704ef616b4716d24d5b95660bfd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 43,  126 => 42,  122 => 41,  116 => 38,  112 => 37,  109 => 36,  103 => 35,  86 => 25,  81 => 23,  70 => 14,  64 => 13,  51 => 7,  46 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
/* <!-- Start: Content-Wrapper -->*/
/* <section id="content_wrapper">*/
/*     <section id="content" class="pn animated fadeIn">*/
/* */
/*         <div class="center-block mt50 mw800">*/
/*             <h1 class="error-title"> 404! </h1>*/
/*             <h2 class="error-subtitle">Page Not Found.</h2>*/
/*             <h4 class="text-muted">The requested page couldn't be located. Checkout for any URL*/
/*                 misspelling or <a href="{{ path('homepage') }}">return to the homepage</a>.</h4>*/
/*             <div class="pull-left">*/
/*                 <img src="{{ asset('assets/img/logos/logo_grey.png') }}" class="img-responsive mt20 w225" alt="logo">*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     <!-- End: Content -->*/
/* */
/* </section>*/
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
