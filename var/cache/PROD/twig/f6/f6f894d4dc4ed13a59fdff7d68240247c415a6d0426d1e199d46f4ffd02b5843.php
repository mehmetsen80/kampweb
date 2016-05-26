<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_44c0111d62be12cdd39e81eee5083d18600e139b426f0bdbee2531fdb24c9c28 extends Twig_Template
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
        $__internal_6e60dcdafdba7560bbc9fcaaae187bc3f2aa35bd0948c96d0bcdeb103f11308b = $this->env->getExtension("native_profiler");
        $__internal_6e60dcdafdba7560bbc9fcaaae187bc3f2aa35bd0948c96d0bcdeb103f11308b->enter($__internal_6e60dcdafdba7560bbc9fcaaae187bc3f2aa35bd0948c96d0bcdeb103f11308b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

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
        
        $__internal_6e60dcdafdba7560bbc9fcaaae187bc3f2aa35bd0948c96d0bcdeb103f11308b->leave($__internal_6e60dcdafdba7560bbc9fcaaae187bc3f2aa35bd0948c96d0bcdeb103f11308b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_657724f312dd66b1417cdaa71a55194cd8253e9f5a25add47331eaeda4601a47 = $this->env->getExtension("native_profiler");
        $__internal_657724f312dd66b1417cdaa71a55194cd8253e9f5a25add47331eaeda4601a47->enter($__internal_657724f312dd66b1417cdaa71a55194cd8253e9f5a25add47331eaeda4601a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_657724f312dd66b1417cdaa71a55194cd8253e9f5a25add47331eaeda4601a47->leave($__internal_657724f312dd66b1417cdaa71a55194cd8253e9f5a25add47331eaeda4601a47_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed85f85d7aa2e2bbb52d3c5befd350f1b66a74c04d463620b7a5f11ea4a2d306 = $this->env->getExtension("native_profiler");
        $__internal_ed85f85d7aa2e2bbb52d3c5befd350f1b66a74c04d463620b7a5f11ea4a2d306->enter($__internal_ed85f85d7aa2e2bbb52d3c5befd350f1b66a74c04d463620b7a5f11ea4a2d306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ed85f85d7aa2e2bbb52d3c5befd350f1b66a74c04d463620b7a5f11ea4a2d306->leave($__internal_ed85f85d7aa2e2bbb52d3c5befd350f1b66a74c04d463620b7a5f11ea4a2d306_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f025297c635c4f3a2150d2e57f6c680ce7f34b5d010b47a08c5c1d9fe5f85d2c = $this->env->getExtension("native_profiler");
        $__internal_f025297c635c4f3a2150d2e57f6c680ce7f34b5d010b47a08c5c1d9fe5f85d2c->enter($__internal_f025297c635c4f3a2150d2e57f6c680ce7f34b5d010b47a08c5c1d9fe5f85d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f025297c635c4f3a2150d2e57f6c680ce7f34b5d010b47a08c5c1d9fe5f85d2c->leave($__internal_f025297c635c4f3a2150d2e57f6c680ce7f34b5d010b47a08c5c1d9fe5f85d2c_prof);

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
