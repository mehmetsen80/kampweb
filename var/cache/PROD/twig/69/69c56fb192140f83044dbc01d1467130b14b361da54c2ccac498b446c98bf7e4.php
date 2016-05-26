<?php

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_8bb299fb114d8da83dae225fe75792edea078bae416926adbcad6621a4516b5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.css"), "html", null, true);
        echo "\">

    <!-- Main Style -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">

    <!-- Responsive Style -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\">

    <!--Icon Fonts-->
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/fonts/font-awesome/font-awesome.min.css"), "html", null, true);
        echo "\">

    <!-- Extras -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/extras/animate.css"), "html", null, true);
        echo "\">


";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "    <body>
    <header id=\"home\">
        <!-- Color over Image -->
        <div class=\"color-overlay\">

            <!-- navbar log -->
            <div class=\"navbar logo-nav\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-md-6 col-xs-4\">
                            <div class=\"navbar-header\">
                                <div class=\"logo\">
                                    <!-- <a href=\"\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(""), "html", null, true);
        echo "\" alt=\"\"></a>-->
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-md-6 col-xs-8\">
                            <div class=\"pull-right\">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Heading And Texts -->
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-10 col-md-offset-1 intro-section\">
                        <h1 class=\"intro\">Ah crap!</h1>
                        <p class=\"sub-heading\">
                            The page that you're looking for is not found! We will fix that soon!
                        </p>
                        <a class=\"btn btn-common wow bounceIn\" href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Main Page</a>
                    </div>
                </div>
            </div>
            <!-- Heading And Texts End-->

        </div>
        <!-- Color over Image  End -->
    </header>
    <!-- HEADER END -->
    </body>

";
    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        // line 71
        echo "<!-- Bootstrap JS -->
<!-- jQuery Load -->
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap -->
<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!--WOW Scroll Spy-->
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/wow.js"), "html", null, true);
        echo "\"></script>
<!-- Smooth Scroll -->
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/smooth-on-scroll.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/smooth-scroll.js"), "html", null, true);
        echo "\"></script>
<!-- All JS plugin Triggers -->
<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  163 => 82,  158 => 80,  154 => 79,  149 => 77,  144 => 75,  139 => 73,  135 => 71,  132 => 70,  115 => 57,  91 => 36,  77 => 24,  74 => 23,  66 => 19,  60 => 16,  54 => 13,  48 => 10,  42 => 7,  37 => 4,  34 => 3,  30 => 70,  28 => 23,  26 => 3,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* {% block stylesheets %}*/
/* */
/* */
/*     <!-- Bootstrap -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.css') }}">*/
/* */
/*     <!-- Main Style -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">*/
/* */
/*     <!-- Responsive Style -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">*/
/* */
/*     <!--Icon Fonts-->*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('assets/fonts/font-awesome/font-awesome.min.css') }}">*/
/* */
/*     <!-- Extras -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/extras/animate.css') }}">*/
/* */
/* */
/* {% endblock %}*/
/* {% block body %}*/
/*     <body>*/
/*     <header id="home">*/
/*         <!-- Color over Image -->*/
/*         <div class="color-overlay">*/
/* */
/*             <!-- navbar log -->*/
/*             <div class="navbar logo-nav">*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="col-sm-6 col-md-6 col-xs-4">*/
/*                             <div class="navbar-header">*/
/*                                 <div class="logo">*/
/*                                     <!-- <a href=""><img src="{{ asset('') }}" alt=""></a>-->*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-sm-6 col-md-6 col-xs-8">*/
/*                             <div class="pull-right">*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <!-- Heading And Texts -->*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-10 col-md-offset-1 intro-section">*/
/*                         <h1 class="intro">Ah crap!</h1>*/
/*                         <p class="sub-heading">*/
/*                             The page that you're looking for is not found! We will fix that soon!*/
/*                         </p>*/
/*                         <a class="btn btn-common wow bounceIn" href="{{ path('homepage') }}">Main Page</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- Heading And Texts End-->*/
/* */
/*         </div>*/
/*         <!-- Color over Image  End -->*/
/*     </header>*/
/*     <!-- HEADER END -->*/
/*     </body>*/
/* */
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <!-- Bootstrap JS -->*/
/* <!-- jQuery Load -->*/
/* <script src="{{ asset('assets/js/jquery-min.js') }}"></script>*/
/* <!-- Bootstrap -->*/
/* <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>*/
/* <!--WOW Scroll Spy-->*/
/* <script src="{{ asset('assets/js/wow.js') }}"></script>*/
/* <!-- Smooth Scroll -->*/
/* <script src="{{ asset('assets/js/smooth-on-scroll.js') }}"></script>*/
/* <script src="{{ asset('assets/js/smooth-scroll.js') }}"></script>*/
/* <!-- All JS plugin Triggers -->*/
/* <script src="{{ asset('assets/js/main.js') }}"></script>*/
/* {% endblock %}*/
