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
        $__internal_b2a6c2d730c352c93b520c53e7f8617aaac888f6e7c3a2781e94ff28fce0ac1f = $this->env->getExtension("native_profiler");
        $__internal_b2a6c2d730c352c93b520c53e7f8617aaac888f6e7c3a2781e94ff28fce0ac1f->enter($__internal_b2a6c2d730c352c93b520c53e7f8617aaac888f6e7c3a2781e94ff28fce0ac1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

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
        
        $__internal_b2a6c2d730c352c93b520c53e7f8617aaac888f6e7c3a2781e94ff28fce0ac1f->leave($__internal_b2a6c2d730c352c93b520c53e7f8617aaac888f6e7c3a2781e94ff28fce0ac1f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d33bde0ca9ea29e6e0c61abfb962585425d928309e1718db102a1e23c62c3d90 = $this->env->getExtension("native_profiler");
        $__internal_d33bde0ca9ea29e6e0c61abfb962585425d928309e1718db102a1e23c62c3d90->enter($__internal_d33bde0ca9ea29e6e0c61abfb962585425d928309e1718db102a1e23c62c3d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d33bde0ca9ea29e6e0c61abfb962585425d928309e1718db102a1e23c62c3d90->leave($__internal_d33bde0ca9ea29e6e0c61abfb962585425d928309e1718db102a1e23c62c3d90_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_59d053352a600324f3b8480138d419d4274de035744613fe4494fbbeac2400d6 = $this->env->getExtension("native_profiler");
        $__internal_59d053352a600324f3b8480138d419d4274de035744613fe4494fbbeac2400d6->enter($__internal_59d053352a600324f3b8480138d419d4274de035744613fe4494fbbeac2400d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_59d053352a600324f3b8480138d419d4274de035744613fe4494fbbeac2400d6->leave($__internal_59d053352a600324f3b8480138d419d4274de035744613fe4494fbbeac2400d6_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_53f3fac1a6b3f5c4626ace1996cb1aaac0b6c7f847893810adba4f7d5863a0f0 = $this->env->getExtension("native_profiler");
        $__internal_53f3fac1a6b3f5c4626ace1996cb1aaac0b6c7f847893810adba4f7d5863a0f0->enter($__internal_53f3fac1a6b3f5c4626ace1996cb1aaac0b6c7f847893810adba4f7d5863a0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_53f3fac1a6b3f5c4626ace1996cb1aaac0b6c7f847893810adba4f7d5863a0f0->leave($__internal_53f3fac1a6b3f5c4626ace1996cb1aaac0b6c7f847893810adba4f7d5863a0f0_prof);

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
