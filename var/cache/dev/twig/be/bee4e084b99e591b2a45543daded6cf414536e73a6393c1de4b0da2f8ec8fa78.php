<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ed9ea1b68cd085ef93ab708514634575d537be2d006a1a205b5a872f98d8dab2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdaf767773f1ccd66d997ef2c93edfc2982423b5b911a929e3ed95242102ee08 = $this->env->getExtension("native_profiler");
        $__internal_bdaf767773f1ccd66d997ef2c93edfc2982423b5b911a929e3ed95242102ee08->enter($__internal_bdaf767773f1ccd66d997ef2c93edfc2982423b5b911a929e3ed95242102ee08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdaf767773f1ccd66d997ef2c93edfc2982423b5b911a929e3ed95242102ee08->leave($__internal_bdaf767773f1ccd66d997ef2c93edfc2982423b5b911a929e3ed95242102ee08_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c96ac0157522448120939f4fab51f9929ee71673ec5043dc4cfcba96356005f = $this->env->getExtension("native_profiler");
        $__internal_5c96ac0157522448120939f4fab51f9929ee71673ec5043dc4cfcba96356005f->enter($__internal_5c96ac0157522448120939f4fab51f9929ee71673ec5043dc4cfcba96356005f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5c96ac0157522448120939f4fab51f9929ee71673ec5043dc4cfcba96356005f->leave($__internal_5c96ac0157522448120939f4fab51f9929ee71673ec5043dc4cfcba96356005f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_050886186cfa75ca4aa14022175b86d798994b12e140664cde04a727eecd20da = $this->env->getExtension("native_profiler");
        $__internal_050886186cfa75ca4aa14022175b86d798994b12e140664cde04a727eecd20da->enter($__internal_050886186cfa75ca4aa14022175b86d798994b12e140664cde04a727eecd20da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_050886186cfa75ca4aa14022175b86d798994b12e140664cde04a727eecd20da->leave($__internal_050886186cfa75ca4aa14022175b86d798994b12e140664cde04a727eecd20da_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5474327e086d0655f2d14714f8bebaaeacca595884f23257517d8d3c5b0d72e6 = $this->env->getExtension("native_profiler");
        $__internal_5474327e086d0655f2d14714f8bebaaeacca595884f23257517d8d3c5b0d72e6->enter($__internal_5474327e086d0655f2d14714f8bebaaeacca595884f23257517d8d3c5b0d72e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5474327e086d0655f2d14714f8bebaaeacca595884f23257517d8d3c5b0d72e6->leave($__internal_5474327e086d0655f2d14714f8bebaaeacca595884f23257517d8d3c5b0d72e6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
