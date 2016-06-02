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
        $__internal_9f648eee184eb97a93460cc1ec100bd6965d4497a7d794aa987fd8cf05339128 = $this->env->getExtension("native_profiler");
        $__internal_9f648eee184eb97a93460cc1ec100bd6965d4497a7d794aa987fd8cf05339128->enter($__internal_9f648eee184eb97a93460cc1ec100bd6965d4497a7d794aa987fd8cf05339128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f648eee184eb97a93460cc1ec100bd6965d4497a7d794aa987fd8cf05339128->leave($__internal_9f648eee184eb97a93460cc1ec100bd6965d4497a7d794aa987fd8cf05339128_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b9e65ce72a281939af9f84a9b2c6db6857740ab3e1a9a30588c4cee1bdbd1bb8 = $this->env->getExtension("native_profiler");
        $__internal_b9e65ce72a281939af9f84a9b2c6db6857740ab3e1a9a30588c4cee1bdbd1bb8->enter($__internal_b9e65ce72a281939af9f84a9b2c6db6857740ab3e1a9a30588c4cee1bdbd1bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b9e65ce72a281939af9f84a9b2c6db6857740ab3e1a9a30588c4cee1bdbd1bb8->leave($__internal_b9e65ce72a281939af9f84a9b2c6db6857740ab3e1a9a30588c4cee1bdbd1bb8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7631447dc7b61cc1195338c7a6368101401e6dd43af4ed5622b6f54174cdd402 = $this->env->getExtension("native_profiler");
        $__internal_7631447dc7b61cc1195338c7a6368101401e6dd43af4ed5622b6f54174cdd402->enter($__internal_7631447dc7b61cc1195338c7a6368101401e6dd43af4ed5622b6f54174cdd402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7631447dc7b61cc1195338c7a6368101401e6dd43af4ed5622b6f54174cdd402->leave($__internal_7631447dc7b61cc1195338c7a6368101401e6dd43af4ed5622b6f54174cdd402_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cc5b4b17a8f5ae9c49cd08f7c6ab7cfefac43a3185cb9257116bc3e96dc39df = $this->env->getExtension("native_profiler");
        $__internal_9cc5b4b17a8f5ae9c49cd08f7c6ab7cfefac43a3185cb9257116bc3e96dc39df->enter($__internal_9cc5b4b17a8f5ae9c49cd08f7c6ab7cfefac43a3185cb9257116bc3e96dc39df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9cc5b4b17a8f5ae9c49cd08f7c6ab7cfefac43a3185cb9257116bc3e96dc39df->leave($__internal_9cc5b4b17a8f5ae9c49cd08f7c6ab7cfefac43a3185cb9257116bc3e96dc39df_prof);

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
