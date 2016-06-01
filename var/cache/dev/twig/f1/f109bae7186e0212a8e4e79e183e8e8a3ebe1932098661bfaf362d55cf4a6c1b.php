<?php

/* :user:dashboard.html.twig */
class __TwigTemplate_58d1079e7e63ab46ae14e7b46a178b810cee44704d4c11861110712382c87bc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::default.html.twig", ":user:dashboard.html.twig", 1);
        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3271221611a5901ad6eb54e30526e6f4a266b6e9e9e2209b1e6d4c064b1cb35 = $this->env->getExtension("native_profiler");
        $__internal_b3271221611a5901ad6eb54e30526e6f4a266b6e9e9e2209b1e6d4c064b1cb35->enter($__internal_b3271221611a5901ad6eb54e30526e6f4a266b6e9e9e2209b1e6d4c064b1cb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3271221611a5901ad6eb54e30526e6f4a266b6e9e9e2209b1e6d4c064b1cb35->leave($__internal_b3271221611a5901ad6eb54e30526e6f4a266b6e9e9e2209b1e6d4c064b1cb35_prof);

    }

    // line 2
    public function block_styles($context, array $blocks = array())
    {
        $__internal_680e1292cef7aeff4922f58c9c226c7c08c96bf27c12d068317289d89e565bed = $this->env->getExtension("native_profiler");
        $__internal_680e1292cef7aeff4922f58c9c226c7c08c96bf27c12d068317289d89e565bed->enter($__internal_680e1292cef7aeff4922f58c9c226c7c08c96bf27c12d068317289d89e565bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 3
        echo "    <!-- PNotify -->
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/pnotify/pnotify.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_680e1292cef7aeff4922f58c9c226c7c08c96bf27c12d068317289d89e565bed->leave($__internal_680e1292cef7aeff4922f58c9c226c7c08c96bf27c12d068317289d89e565bed_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b9b5467e8ee84d11f0d5be1281c28382c07637a334ba84e9f2e3e19c62f03a6 = $this->env->getExtension("native_profiler");
        $__internal_2b9b5467e8ee84d11f0d5be1281c28382c07637a334ba84e9f2e3e19c62f03a6->enter($__internal_2b9b5467e8ee84d11f0d5be1281c28382c07637a334ba84e9f2e3e19c62f03a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <!-- Start: CONTENT WRAPPER -->
    <section id=\"content_wrapper\">
        <!-- Start: TOPBAR -->
        <header id=\"topbar\">
            <div class=\"topbar-left\">
                <ol class=\"breadcrumb\">
                    <li class=\"crumb-active\">
                        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">Dashboard</a>
                    </li>
                    <li class=\"crumb-icon\">
                        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">
                            <span class=\"glyphicon glyphicon-home\"></span>
                        </a>
                    </li>
                </ol>
            </div>
        </header>
        <!-- End: TOPBAR -->

        <!-- Begin: CONTENT -->
        <section id=\"content\" >
            <div class=\"panel\">
                <div class=\"panel-heading\">
                    <span class=\"panel-title\">Panel title</span>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "welcome"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 34
            echo "                        <div class=\"alert alert-system alert-dismissable\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                            <i class=\"fa fa-cubes pr10\"></i>
                            <strong>";
            // line 37
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</strong>
                            It is great to see you again!
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </div>
            </div>
        </section>
        <!-- End: CONTENT-->
    </section>
";
        
        $__internal_2b9b5467e8ee84d11f0d5be1281c28382c07637a334ba84e9f2e3e19c62f03a6->leave($__internal_2b9b5467e8ee84d11f0d5be1281c28382c07637a334ba84e9f2e3e19c62f03a6_prof);

    }

    public function getTemplateName()
    {
        return ":user:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 41,  102 => 37,  97 => 34,  93 => 33,  74 => 17,  68 => 14,  59 => 7,  53 => 6,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::default.html.twig' %}*/
/* {% block styles %}*/
/*     <!-- PNotify -->*/
/*     <script src="{{ asset('assets/vendor/plugins/pnotify/pnotify.js') }}"></script>*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <!-- Start: CONTENT WRAPPER -->*/
/*     <section id="content_wrapper">*/
/*         <!-- Start: TOPBAR -->*/
/*         <header id="topbar">*/
/*             <div class="topbar-left">*/
/*                 <ol class="breadcrumb">*/
/*                     <li class="crumb-active">*/
/*                         <a href="{{ path('dashboard') }}">Dashboard</a>*/
/*                     </li>*/
/*                     <li class="crumb-icon">*/
/*                         <a href="{{ path('dashboard') }}">*/
/*                             <span class="glyphicon glyphicon-home"></span>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ol>*/
/*             </div>*/
/*         </header>*/
/*         <!-- End: TOPBAR -->*/
/* */
/*         <!-- Begin: CONTENT -->*/
/*         <section id="content" >*/
/*             <div class="panel">*/
/*                 <div class="panel-heading">*/
/*                     <span class="panel-title">Panel title</span>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     {% for flash_message in app.session.flashBag.get('welcome') %}*/
/*                         <div class="alert alert-system alert-dismissable">*/
/*                             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*                             <i class="fa fa-cubes pr10"></i>*/
/*                             <strong>{{ flash_message }}</strong>*/
/*                             It is great to see you again!*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*         <!-- End: CONTENT-->*/
/*     </section>*/
/* {% endblock %}*/
