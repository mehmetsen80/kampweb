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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be43a38421f2386bca56186fc328f2c26a7fc6205cc203fe7742160274b4d81b = $this->env->getExtension("native_profiler");
        $__internal_be43a38421f2386bca56186fc328f2c26a7fc6205cc203fe7742160274b4d81b->enter($__internal_be43a38421f2386bca56186fc328f2c26a7fc6205cc203fe7742160274b4d81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be43a38421f2386bca56186fc328f2c26a7fc6205cc203fe7742160274b4d81b->leave($__internal_be43a38421f2386bca56186fc328f2c26a7fc6205cc203fe7742160274b4d81b_prof);

    }

    // line 2
    public function block_styles($context, array $blocks = array())
    {
        $__internal_1b7771a7a0c14152cabd69f6475c57643bc6b9edd58b734d2493820ccb4627de = $this->env->getExtension("native_profiler");
        $__internal_1b7771a7a0c14152cabd69f6475c57643bc6b9edd58b734d2493820ccb4627de->enter($__internal_1b7771a7a0c14152cabd69f6475c57643bc6b9edd58b734d2493820ccb4627de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 3
        echo "    <link rel='stylesheet' type='text/css' href=";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/fonts/stateface/stateface.css"), "html", null, true);
        echo ">
";
        
        $__internal_1b7771a7a0c14152cabd69f6475c57643bc6b9edd58b734d2493820ccb4627de->leave($__internal_1b7771a7a0c14152cabd69f6475c57643bc6b9edd58b734d2493820ccb4627de_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_62bd672d75bcd04736e6e18951ceb7b84571eb979d06024d1385a48413178fe9 = $this->env->getExtension("native_profiler");
        $__internal_62bd672d75bcd04736e6e18951ceb7b84571eb979d06024d1385a48413178fe9->enter($__internal_62bd672d75bcd04736e6e18951ceb7b84571eb979d06024d1385a48413178fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- Start: CONTENT WRAPPER -->
    <section id=\"content_wrapper\">
        ";
        // line 9
        echo "            ";
        // line 10
        echo "                ";
        // line 11
        echo "                ";
        // line 12
        echo "                ";
        // line 13
        echo "                ";
        // line 14
        echo "            ";
        // line 15
        echo "        ";
        // line 16
        echo "        <!-- Start: TOPBAR -->
        <header id=\"topbar\">
            <div class=\"topbar-left\">
                <ol class=\"breadcrumb\">
                    <li class=\"crumb-active\">
                        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">Dashboard</a>
                    </li>
                    <li class=\"crumb-icon\">
                        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">
                            <span class=\"glyphicon glyphicon-home\"></span>
                        </a>
                    </li>
                </ol>
            </div>
        </header>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "welcome"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 32
            echo "            <div class=\"alert alert-info alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <i class=\"fa fa-exclamation-triangle pr10\"></i>
                <strong>";
            // line 35
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</strong>
                <a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("update");
            echo "\" class=\"alert-link\">It is great to see you again ^_^</a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        <!-- End: TOPBAR -->

        <!-- Begin: CONTENT -->
        <section id=\"content\" >
            <div class=\"panel\">
                <div class=\"panel-heading\">
                    <span class=\"panel-title\">Panel title</span>
                </div>
                <div class=\"panel-body\">

                </div>
            </div>
        </section>
        <!-- End: CONTENT-->
    </section>
    <style>
        /*chart demo styles*/
        .c3 {}
        /* tick color */
        .c3 .tick {
            fill: #AAA;
        }
        /* axis color */
        .c3 line,
        .c3 path {
            stroke: #BBB;
        }
        /*axis label color*/
        .c3 .c3-axis-x-label,
        .c3 .c3-axis-y-label {
            fill: #AAA;
        }
        /*legend label text color*/
        .c3-legend-item {
            fill: #888;
            font-size: 14px;
        }
    </style>

";
        
        $__internal_62bd672d75bcd04736e6e18951ceb7b84571eb979d06024d1385a48413178fe9->leave($__internal_62bd672d75bcd04736e6e18951ceb7b84571eb979d06024d1385a48413178fe9_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec5fa907a0eed1390d2287a9c0cac5a4d0e4ebd7199975d2c3d98cf79f6119ef = $this->env->getExtension("native_profiler");
        $__internal_ec5fa907a0eed1390d2287a9c0cac5a4d0e4ebd7199975d2c3d98cf79f6119ef->enter($__internal_ec5fa907a0eed1390d2287a9c0cac5a4d0e4ebd7199975d2c3d98cf79f6119ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/jquery_ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Page Plugins -->
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/demo/charts/d3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/c3charts/c3.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Theme Javascript -->
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/utility/utility.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/demo/demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

    <!-- Page Javascript -->
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/demo/charts/d3.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {

            \"use strict\";

            // Init Theme Core
            Core.init();

            // Init Demo JS
            Demo.init();

            // This page contains more Initilization Javascript than normal.
            // As a result it has its own js page. See charts.js for more info
            D3Charts.init();


        });
    </script>
    <!-- END: PAGE SCRIPTS -->
";
        
        $__internal_ec5fa907a0eed1390d2287a9c0cac5a4d0e4ebd7199975d2c3d98cf79f6119ef->leave($__internal_ec5fa907a0eed1390d2287a9c0cac5a4d0e4ebd7199975d2c3d98cf79f6119ef_prof);

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
        return array (  212 => 96,  206 => 93,  202 => 92,  198 => 91,  192 => 88,  188 => 87,  182 => 84,  178 => 83,  173 => 80,  167 => 79,  121 => 39,  112 => 36,  108 => 35,  103 => 32,  99 => 31,  89 => 24,  83 => 21,  76 => 16,  74 => 15,  72 => 14,  70 => 13,  68 => 12,  66 => 11,  64 => 10,  62 => 9,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends '::default.html.twig' %}*/
/* {% block styles %}*/
/*     <link rel='stylesheet' type='text/css' href={{ asset('assets/fonts/stateface/stateface.css') }}>*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <!-- Start: CONTENT WRAPPER -->*/
/*     <section id="content_wrapper">*/
/*         {#{% for flash_message in app.session.flashBag.get('welcome') %}#}*/
/*             {#<div class="alert alert-system alert-dismissable"  style="width: 100%; opacity: 1; display: block; overflow: visible; left: 0px; top: 0px;">#}*/
/*                 {#<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>#}*/
/*                 {#<i class="fa fa-cubes pr10"></i>#}*/
/*                 {#<strong>{{ flash_message }}</strong>#}*/
/*                 {#It is great to see you again!#}*/
/*             {#</div>#}*/
/*         {#{% endfor %}#}*/
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
/*         {% for flash_message in app.session.flashBag.get('welcome') %}*/
/*             <div class="alert alert-info alert-dismissable">*/
/*                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*                 <i class="fa fa-exclamation-triangle pr10"></i>*/
/*                 <strong>{{ flash_message }}</strong>*/
/*                 <a href="{{ path('update') }}" class="alert-link">It is great to see you again ^_^</a>*/
/*             </div>*/
/*         {% endfor %}*/
/*         <!-- End: TOPBAR -->*/
/* */
/*         <!-- Begin: CONTENT -->*/
/*         <section id="content" >*/
/*             <div class="panel">*/
/*                 <div class="panel-heading">*/
/*                     <span class="panel-title">Panel title</span>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*         <!-- End: CONTENT-->*/
/*     </section>*/
/*     <style>*/
/*         /*chart demo styles*//* */
/*         .c3 {}*/
/*         /* tick color *//* */
/*         .c3 .tick {*/
/*             fill: #AAA;*/
/*         }*/
/*         /* axis color *//* */
/*         .c3 line,*/
/*         .c3 path {*/
/*             stroke: #BBB;*/
/*         }*/
/*         /*axis label color*//* */
/*         .c3 .c3-axis-x-label,*/
/*         .c3 .c3-axis-y-label {*/
/*             fill: #AAA;*/
/*         }*/
/*         /*legend label text color*//* */
/*         .c3-legend-item {*/
/*             fill: #888;*/
/*             font-size: 14px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     <!-- BEGIN: PAGE SCRIPTS -->*/
/* */
/*     <!-- jQuery -->*/
/*     <script src="{{ asset('assets/vendor/jquery/jquery-1.11.1.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/vendor/jquery/jquery_ui/jquery-ui.min.js') }}"></script>*/
/* */
/*     <!-- Page Plugins -->*/
/*     <script src="{{ asset('assets/js/demo/charts/d3.js') }}"></script>*/
/*     <script src="{{ asset('assets/vendor/plugins/c3charts/c3.min.js') }}"></script>*/
/* */
/*     <!-- Theme Javascript -->*/
/*     <script src="{{ asset('assets/js/utility/utility.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/demo/demo.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/main.js') }}"></script>*/
/* */
/*     <!-- Page Javascript -->*/
/*     <script src="{{ asset('assets/js/demo/charts/d3.js') }}"></script>*/
/* */
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
/*             // This page contains more Initilization Javascript than normal.*/
/*             // As a result it has its own js page. See charts.js for more info*/
/*             D3Charts.init();*/
/* */
/* */
/*         });*/
/*     </script>*/
/*     <!-- END: PAGE SCRIPTS -->*/
/* {% endblock %}*/
