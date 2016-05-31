<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_97cc2da4b4b7aedf0e3763663c8351b003ccf0a494973b0474edb916a376f2a0 extends Twig_Template
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
        $__internal_9241274852d8c0a4ffb875f0b36c53fea6b746971ccb4bf189bab911d764f0ba = $this->env->getExtension("native_profiler");
        $__internal_9241274852d8c0a4ffb875f0b36c53fea6b746971ccb4bf189bab911d764f0ba->enter($__internal_9241274852d8c0a4ffb875f0b36c53fea6b746971ccb4bf189bab911d764f0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

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
        
        $__internal_9241274852d8c0a4ffb875f0b36c53fea6b746971ccb4bf189bab911d764f0ba->leave($__internal_9241274852d8c0a4ffb875f0b36c53fea6b746971ccb4bf189bab911d764f0ba_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fc5ffd464302f16dc2031ddd813363e8b0c1f9c4b8e1dbf941374049c34e8ce4 = $this->env->getExtension("native_profiler");
        $__internal_fc5ffd464302f16dc2031ddd813363e8b0c1f9c4b8e1dbf941374049c34e8ce4->enter($__internal_fc5ffd464302f16dc2031ddd813363e8b0c1f9c4b8e1dbf941374049c34e8ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fc5ffd464302f16dc2031ddd813363e8b0c1f9c4b8e1dbf941374049c34e8ce4->leave($__internal_fc5ffd464302f16dc2031ddd813363e8b0c1f9c4b8e1dbf941374049c34e8ce4_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_67d3e31c6d96bf92b82cb136b2ac80eb10d971e51ca5e508b4c50d3564581a18 = $this->env->getExtension("native_profiler");
        $__internal_67d3e31c6d96bf92b82cb136b2ac80eb10d971e51ca5e508b4c50d3564581a18->enter($__internal_67d3e31c6d96bf92b82cb136b2ac80eb10d971e51ca5e508b4c50d3564581a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                            The servers are on fire! Grab a bucket! send help!
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
        
        $__internal_67d3e31c6d96bf92b82cb136b2ac80eb10d971e51ca5e508b4c50d3564581a18->leave($__internal_67d3e31c6d96bf92b82cb136b2ac80eb10d971e51ca5e508b4c50d3564581a18_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6ef23255e7988f866fd21b9494786ddcd19c84bb7e565a4db47be87dca587ecf = $this->env->getExtension("native_profiler");
        $__internal_6ef23255e7988f866fd21b9494786ddcd19c84bb7e565a4db47be87dca587ecf->enter($__internal_6ef23255e7988f866fd21b9494786ddcd19c84bb7e565a4db47be87dca587ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "    <!-- Bootstrap JS -->
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
        
        $__internal_6ef23255e7988f866fd21b9494786ddcd19c84bb7e565a4db47be87dca587ecf->leave($__internal_6ef23255e7988f866fd21b9494786ddcd19c84bb7e565a4db47be87dca587ecf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
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
/*                             The servers are on fire! Grab a bucket! send help!*/
/*                         </p>*/
/*                             <a class="btn btn-common wow bounceIn" href="{{ path('homepage') }}">Main Page</a>*/
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
/*     <!-- Bootstrap JS -->*/
/*     <!-- jQuery Load -->*/
/*     <script src="{{ asset('assets/js/jquery-min.js') }}"></script>*/
/*     <!-- Bootstrap -->*/
/*     <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>*/
/*     <!--WOW Scroll Spy-->*/
/*     <script src="{{ asset('assets/js/wow.js') }}"></script>*/
/*     <!-- Smooth Scroll -->*/
/*     <script src="{{ asset('assets/js/smooth-on-scroll.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/smooth-scroll.js') }}"></script>*/
/*     <!-- All JS plugin Triggers -->*/
/*     <script src="{{ asset('assets/js/main.js') }}"></script>*/
/* {% endblock %}*/
