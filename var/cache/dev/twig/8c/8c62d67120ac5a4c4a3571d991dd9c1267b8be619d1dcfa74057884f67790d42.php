<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_a2c228a773bd053bc6f68811978d7538cabc48f013010979c85ab3741aa36167 extends Twig_Template
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
        $__internal_2fe9c5b57c9288de701a33a1498290cb9d0e5ce6b5b416830c9a148801e9979b = $this->env->getExtension("native_profiler");
        $__internal_2fe9c5b57c9288de701a33a1498290cb9d0e5ce6b5b416830c9a148801e9979b->enter($__internal_2fe9c5b57c9288de701a33a1498290cb9d0e5ce6b5b416830c9a148801e9979b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

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
        
        $__internal_2fe9c5b57c9288de701a33a1498290cb9d0e5ce6b5b416830c9a148801e9979b->leave($__internal_2fe9c5b57c9288de701a33a1498290cb9d0e5ce6b5b416830c9a148801e9979b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b42c546a13536e21a2a061ee920f2f5ae7bbb8e3df0cd00b3ec71d627e1c11b9 = $this->env->getExtension("native_profiler");
        $__internal_b42c546a13536e21a2a061ee920f2f5ae7bbb8e3df0cd00b3ec71d627e1c11b9->enter($__internal_b42c546a13536e21a2a061ee920f2f5ae7bbb8e3df0cd00b3ec71d627e1c11b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b42c546a13536e21a2a061ee920f2f5ae7bbb8e3df0cd00b3ec71d627e1c11b9->leave($__internal_b42c546a13536e21a2a061ee920f2f5ae7bbb8e3df0cd00b3ec71d627e1c11b9_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4f8d03f346f56601bf0317647a35ff1176904bb3e46ac80e88f7a03c2a527e7 = $this->env->getExtension("native_profiler");
        $__internal_b4f8d03f346f56601bf0317647a35ff1176904bb3e46ac80e88f7a03c2a527e7->enter($__internal_b4f8d03f346f56601bf0317647a35ff1176904bb3e46ac80e88f7a03c2a527e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b4f8d03f346f56601bf0317647a35ff1176904bb3e46ac80e88f7a03c2a527e7->leave($__internal_b4f8d03f346f56601bf0317647a35ff1176904bb3e46ac80e88f7a03c2a527e7_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fd79c63686191aff060b88bcf5ba12acbfe3d4cc5f05923de163c625582f61d9 = $this->env->getExtension("native_profiler");
        $__internal_fd79c63686191aff060b88bcf5ba12acbfe3d4cc5f05923de163c625582f61d9->enter($__internal_fd79c63686191aff060b88bcf5ba12acbfe3d4cc5f05923de163c625582f61d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_fd79c63686191aff060b88bcf5ba12acbfe3d4cc5f05923de163c625582f61d9->leave($__internal_fd79c63686191aff060b88bcf5ba12acbfe3d4cc5f05923de163c625582f61d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  184 => 82,  179 => 80,  175 => 79,  170 => 77,  165 => 75,  160 => 73,  156 => 71,  150 => 70,  130 => 57,  106 => 36,  92 => 24,  86 => 23,  75 => 19,  69 => 16,  63 => 13,  57 => 10,  51 => 7,  46 => 4,  40 => 3,  33 => 70,  31 => 23,  29 => 3,  25 => 1,);
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
