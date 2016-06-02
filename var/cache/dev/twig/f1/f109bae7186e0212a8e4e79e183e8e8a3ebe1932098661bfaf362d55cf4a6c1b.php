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
        $__internal_d84094d91219478d86bb3c434c86f98e9399b09a6880faa6b90a2e9a2338945b = $this->env->getExtension("native_profiler");
        $__internal_d84094d91219478d86bb3c434c86f98e9399b09a6880faa6b90a2e9a2338945b->enter($__internal_d84094d91219478d86bb3c434c86f98e9399b09a6880faa6b90a2e9a2338945b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d84094d91219478d86bb3c434c86f98e9399b09a6880faa6b90a2e9a2338945b->leave($__internal_d84094d91219478d86bb3c434c86f98e9399b09a6880faa6b90a2e9a2338945b_prof);

    }

    // line 2
    public function block_styles($context, array $blocks = array())
    {
        $__internal_8bec55bc3e03789b0e10a62790522b2388b265036a58489d48d558fce8fadf1e = $this->env->getExtension("native_profiler");
        $__internal_8bec55bc3e03789b0e10a62790522b2388b265036a58489d48d558fce8fadf1e->enter($__internal_8bec55bc3e03789b0e10a62790522b2388b265036a58489d48d558fce8fadf1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 3
        echo "    <!-- PNotify -->
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/pnotify/pnotify.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_8bec55bc3e03789b0e10a62790522b2388b265036a58489d48d558fce8fadf1e->leave($__internal_8bec55bc3e03789b0e10a62790522b2388b265036a58489d48d558fce8fadf1e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2e5afd17b940a5c99c952273a0820083f741045256720b0ea54b10868379c8b = $this->env->getExtension("native_profiler");
        $__internal_d2e5afd17b940a5c99c952273a0820083f741045256720b0ea54b10868379c8b->enter($__internal_d2e5afd17b940a5c99c952273a0820083f741045256720b0ea54b10868379c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <!-- Start: CONTENT WRAPPER -->
    <section id=\"content_wrapper\">
        ";
        // line 10
        echo "            ";
        // line 11
        echo "                ";
        // line 12
        echo "                ";
        // line 13
        echo "                ";
        // line 14
        echo "                ";
        // line 15
        echo "            ";
        // line 16
        echo "        ";
        // line 17
        echo "        <!-- Start: TOPBAR -->
        <header id=\"topbar\">
            <div class=\"topbar-left\">
                <ol class=\"breadcrumb\">
                    <li class=\"crumb-active\">
                        <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">Dashboard</a>
                    </li>
                    <li class=\"crumb-icon\">
                        <a href=\"";
        // line 25
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
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "welcome"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 42
            echo "                        <div class=\"ui-pnotify stack_bar_top\" style=\"width: 290px; opacity: 1; display: block; overflow: visible; right: 8px; top: 70px;\">
                            <div class=\"alert ui-pnotify-container alert-success ui-pnotify-shadow\" style=\"min-height: 16px; overflow: hidden;\">
                                <div class=\"ui-pnotify-closer\" style=\"cursor: pointer; visibility: hidden;\">
                                    <span class=\"glyphicon glyphicon-remove\" title=\"Close\"></span>
                                </div>
                                <div class=\"ui-pnotify-sticker\" style=\"cursor: pointer; visibility: hidden;\">
                                    <span class=\"glyphicon glyphicon-play\" title=\"Stick\"></span>
                                </div>
                                <div class=\"ui-pnotify-icon\">
                                    <span class=\"glyphicon glyphicon-ok-sign\">

                                    </span>
                                </div>
                                <h4 class=\"ui-pnotify-title\">";
            // line 55
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</h4>
                                <div class=\"ui-pnotify-text\">It is great to see you again! ^_^</div>
                                <div style=\"margin-top: 5px; clear: both; text-align: right; display: none;\">

                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                </div>
            </div>
        </section>
        <!-- End: CONTENT-->
    </section>
";
        
        $__internal_d2e5afd17b940a5c99c952273a0820083f741045256720b0ea54b10868379c8b->leave($__internal_d2e5afd17b940a5c99c952273a0820083f741045256720b0ea54b10868379c8b_prof);

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
        return array (  142 => 63,  128 => 55,  113 => 42,  109 => 41,  90 => 25,  84 => 22,  77 => 17,  75 => 16,  73 => 15,  71 => 14,  69 => 13,  67 => 12,  65 => 11,  63 => 10,  59 => 7,  53 => 6,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
/*                         <div class="ui-pnotify stack_bar_top" style="width: 290px; opacity: 1; display: block; overflow: visible; right: 8px; top: 70px;">*/
/*                             <div class="alert ui-pnotify-container alert-success ui-pnotify-shadow" style="min-height: 16px; overflow: hidden;">*/
/*                                 <div class="ui-pnotify-closer" style="cursor: pointer; visibility: hidden;">*/
/*                                     <span class="glyphicon glyphicon-remove" title="Close"></span>*/
/*                                 </div>*/
/*                                 <div class="ui-pnotify-sticker" style="cursor: pointer; visibility: hidden;">*/
/*                                     <span class="glyphicon glyphicon-play" title="Stick"></span>*/
/*                                 </div>*/
/*                                 <div class="ui-pnotify-icon">*/
/*                                     <span class="glyphicon glyphicon-ok-sign">*/
/* */
/*                                     </span>*/
/*                                 </div>*/
/*                                 <h4 class="ui-pnotify-title">{{ flash_message }}</h4>*/
/*                                 <div class="ui-pnotify-text">It is great to see you again! ^_^</div>*/
/*                                 <div style="margin-top: 5px; clear: both; text-align: right; display: none;">*/
/* */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*         <!-- End: CONTENT-->*/
/*     </section>*/
/* {% endblock %}*/
