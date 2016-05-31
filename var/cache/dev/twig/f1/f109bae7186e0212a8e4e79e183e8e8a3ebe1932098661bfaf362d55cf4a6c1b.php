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
        $__internal_79544c908c78536638c35d46174d6a1e17096c52fddc6d60e91aa99148af09d8 = $this->env->getExtension("native_profiler");
        $__internal_79544c908c78536638c35d46174d6a1e17096c52fddc6d60e91aa99148af09d8->enter($__internal_79544c908c78536638c35d46174d6a1e17096c52fddc6d60e91aa99148af09d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79544c908c78536638c35d46174d6a1e17096c52fddc6d60e91aa99148af09d8->leave($__internal_79544c908c78536638c35d46174d6a1e17096c52fddc6d60e91aa99148af09d8_prof);

    }

    // line 2
    public function block_styles($context, array $blocks = array())
    {
        $__internal_08f0ee2eed18a26ed1ddff378c14b2351409e4d22a00bef0e3c91f01fd2fe08f = $this->env->getExtension("native_profiler");
        $__internal_08f0ee2eed18a26ed1ddff378c14b2351409e4d22a00bef0e3c91f01fd2fe08f->enter($__internal_08f0ee2eed18a26ed1ddff378c14b2351409e4d22a00bef0e3c91f01fd2fe08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 3
        echo "    <!-- PNotify -->
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/plugins/pnotify/pnotify.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_08f0ee2eed18a26ed1ddff378c14b2351409e4d22a00bef0e3c91f01fd2fe08f->leave($__internal_08f0ee2eed18a26ed1ddff378c14b2351409e4d22a00bef0e3c91f01fd2fe08f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_a50ea6245f03a48c7db7ba9a26d27903905920252aa3587990dac06cf52c63a3 = $this->env->getExtension("native_profiler");
        $__internal_a50ea6245f03a48c7db7ba9a26d27903905920252aa3587990dac06cf52c63a3->enter($__internal_a50ea6245f03a48c7db7ba9a26d27903905920252aa3587990dac06cf52c63a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "                        <div class=\"ui-pnotify stack_top_right\" style=\"width: 290px; opacity: 1; display: block; overflow: visible; right: 8px; top: 70px;\"><div class=\"alert ui-pnotify-container alert-success ui-pnotify-shadow\" style=\"min-height: 16px; overflow: hidden;\"><div class=\"ui-pnotify-closer\" style=\"cursor: pointer; visibility: hidden;\"><span class=\"glyphicon glyphicon-remove\" title=\"Close\"></span></div><div class=\"ui-pnotify-sticker\" style=\"cursor: pointer; visibility: hidden;\"><span class=\"glyphicon glyphicon-play\" title=\"Stick\"></span></div><div class=\"ui-pnotify-icon\"><span class=\"glyphicon glyphicon-ok-sign\"></span></div><h4 class=\"ui-pnotify-title\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</h4><div class=\"ui-pnotify-text\">It is great to see you again! ^_^</div><div style=\"margin-top: 5px; clear: both; text-align: right; display: none;\"></div></div></div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 37
            echo "                        <div class=\"ui-pnotify stack_top_right\" style=\"width: 290px; opacity: 1; display: block; overflow: visible; right: 8px; top: 70px;\"><div class=\"alert ui-pnotify-container alert-success ui-pnotify-shadow\" style=\"min-height: 16px; overflow: hidden;\"><div class=\"ui-pnotify-closer\" style=\"cursor: pointer; visibility: hidden;\"><span class=\"glyphicon glyphicon-remove\" title=\"Close\"></span></div><div class=\"ui-pnotify-sticker\" style=\"cursor: pointer; visibility: hidden;\"><span class=\"glyphicon glyphicon-play\" title=\"Stick\"></span></div><div class=\"ui-pnotify-icon\"><span class=\"glyphicon glyphicon-ok-sign\"></span></div><h4 class=\"ui-pnotify-title\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</h4><div class=\"ui-pnotify-text\">It is great to see you here! ^_^</div><div style=\"margin-top: 5px; clear: both; text-align: right; display: none;\"></div></div></div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </div>
            </div>
        </section>
        <!-- End: CONTENT-->
    </section>
";
        
        $__internal_a50ea6245f03a48c7db7ba9a26d27903905920252aa3587990dac06cf52c63a3->leave($__internal_a50ea6245f03a48c7db7ba9a26d27903905920252aa3587990dac06cf52c63a3_prof);

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
        return array (  120 => 39,  111 => 37,  106 => 36,  97 => 34,  93 => 33,  74 => 17,  68 => 14,  59 => 7,  53 => 6,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
/*                         <div class="ui-pnotify stack_top_right" style="width: 290px; opacity: 1; display: block; overflow: visible; right: 8px; top: 70px;"><div class="alert ui-pnotify-container alert-success ui-pnotify-shadow" style="min-height: 16px; overflow: hidden;"><div class="ui-pnotify-closer" style="cursor: pointer; visibility: hidden;"><span class="glyphicon glyphicon-remove" title="Close"></span></div><div class="ui-pnotify-sticker" style="cursor: pointer; visibility: hidden;"><span class="glyphicon glyphicon-play" title="Stick"></span></div><div class="ui-pnotify-icon"><span class="glyphicon glyphicon-ok-sign"></span></div><h4 class="ui-pnotify-title">{{ flash_message }}</h4><div class="ui-pnotify-text">It is great to see you again! ^_^</div><div style="margin-top: 5px; clear: both; text-align: right; display: none;"></div></div></div>*/
/*                     {% endfor %}*/
/*                     {% for flash_message in app.session.flashBag.get('success') %}*/
/*                         <div class="ui-pnotify stack_top_right" style="width: 290px; opacity: 1; display: block; overflow: visible; right: 8px; top: 70px;"><div class="alert ui-pnotify-container alert-success ui-pnotify-shadow" style="min-height: 16px; overflow: hidden;"><div class="ui-pnotify-closer" style="cursor: pointer; visibility: hidden;"><span class="glyphicon glyphicon-remove" title="Close"></span></div><div class="ui-pnotify-sticker" style="cursor: pointer; visibility: hidden;"><span class="glyphicon glyphicon-play" title="Stick"></span></div><div class="ui-pnotify-icon"><span class="glyphicon glyphicon-ok-sign"></span></div><h4 class="ui-pnotify-title">{{ flash_message }}</h4><div class="ui-pnotify-text">It is great to see you here! ^_^</div><div style="margin-top: 5px; clear: both; text-align: right; display: none;"></div></div></div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*         <!-- End: CONTENT-->*/
/*     </section>*/
/* {% endblock %}*/
