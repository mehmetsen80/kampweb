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
        $__internal_7c44471854c57f4a032921b28c83f7886f083fd50beb43c5836d5b5243c428f9 = $this->env->getExtension("native_profiler");
        $__internal_7c44471854c57f4a032921b28c83f7886f083fd50beb43c5836d5b5243c428f9->enter($__internal_7c44471854c57f4a032921b28c83f7886f083fd50beb43c5836d5b5243c428f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c44471854c57f4a032921b28c83f7886f083fd50beb43c5836d5b5243c428f9->leave($__internal_7c44471854c57f4a032921b28c83f7886f083fd50beb43c5836d5b5243c428f9_prof);

    }

    // line 2
    public function block_styles($context, array $blocks = array())
    {
        $__internal_973f4350f1e2e65d04f576705600c0f6c66ae1b38db647603aa6c13b25390037 = $this->env->getExtension("native_profiler");
        $__internal_973f4350f1e2e65d04f576705600c0f6c66ae1b38db647603aa6c13b25390037->enter($__internal_973f4350f1e2e65d04f576705600c0f6c66ae1b38db647603aa6c13b25390037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 3
        echo "    <!-- PNotify -->
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/pnotify/pnotify.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_973f4350f1e2e65d04f576705600c0f6c66ae1b38db647603aa6c13b25390037->leave($__internal_973f4350f1e2e65d04f576705600c0f6c66ae1b38db647603aa6c13b25390037_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e1e489a4234c3208e7dfcf13ad3182145ae374f4e124249179114be19616f05 = $this->env->getExtension("native_profiler");
        $__internal_9e1e489a4234c3208e7dfcf13ad3182145ae374f4e124249179114be19616f05->enter($__internal_9e1e489a4234c3208e7dfcf13ad3182145ae374f4e124249179114be19616f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "welcome"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 33
            echo "            <div class=\"alert alert-info alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <i class=\"fa fa-exclamation-triangle pr10\"></i>
                <strong>";
            // line 36
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</strong>
                <a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("update");
            echo "\" class=\"alert-link\">It is great to see you again ^_^</a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
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
";
        
        $__internal_9e1e489a4234c3208e7dfcf13ad3182145ae374f4e124249179114be19616f05->leave($__internal_9e1e489a4234c3208e7dfcf13ad3182145ae374f4e124249179114be19616f05_prof);

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
        return array (  122 => 40,  113 => 37,  109 => 36,  104 => 33,  100 => 32,  90 => 25,  84 => 22,  77 => 17,  75 => 16,  73 => 15,  71 => 14,  69 => 13,  67 => 12,  65 => 11,  63 => 10,  59 => 7,  53 => 6,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*         <!-- End: CONTENT-->*/
/*     </section>*/
/* {% endblock %}*/
