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
        $__internal_dcf8b507dc201f88f39b12271e794acb5dc3c4f8a56bd307350d447b84033363 = $this->env->getExtension("native_profiler");
        $__internal_dcf8b507dc201f88f39b12271e794acb5dc3c4f8a56bd307350d447b84033363->enter($__internal_dcf8b507dc201f88f39b12271e794acb5dc3c4f8a56bd307350d447b84033363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcf8b507dc201f88f39b12271e794acb5dc3c4f8a56bd307350d447b84033363->leave($__internal_dcf8b507dc201f88f39b12271e794acb5dc3c4f8a56bd307350d447b84033363_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3dcb882a8189f224d1a18c3500d7886c4b2c9808a4af62b5bf9685c25a599b41 = $this->env->getExtension("native_profiler");
        $__internal_3dcb882a8189f224d1a18c3500d7886c4b2c9808a4af62b5bf9685c25a599b41->enter($__internal_3dcb882a8189f224d1a18c3500d7886c4b2c9808a4af62b5bf9685c25a599b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3dcb882a8189f224d1a18c3500d7886c4b2c9808a4af62b5bf9685c25a599b41->leave($__internal_3dcb882a8189f224d1a18c3500d7886c4b2c9808a4af62b5bf9685c25a599b41_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2643bd3eb527dc8eb297b2f04aeddc69ea937fb36af6a09a5b7e8017e50e9dd2 = $this->env->getExtension("native_profiler");
        $__internal_2643bd3eb527dc8eb297b2f04aeddc69ea937fb36af6a09a5b7e8017e50e9dd2->enter($__internal_2643bd3eb527dc8eb297b2f04aeddc69ea937fb36af6a09a5b7e8017e50e9dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2643bd3eb527dc8eb297b2f04aeddc69ea937fb36af6a09a5b7e8017e50e9dd2->leave($__internal_2643bd3eb527dc8eb297b2f04aeddc69ea937fb36af6a09a5b7e8017e50e9dd2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c67bff1815c7b0d4c9b63c5852160c8961d665e2313361d2bf106e6d294bf89 = $this->env->getExtension("native_profiler");
        $__internal_8c67bff1815c7b0d4c9b63c5852160c8961d665e2313361d2bf106e6d294bf89->enter($__internal_8c67bff1815c7b0d4c9b63c5852160c8961d665e2313361d2bf106e6d294bf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8c67bff1815c7b0d4c9b63c5852160c8961d665e2313361d2bf106e6d294bf89->leave($__internal_8c67bff1815c7b0d4c9b63c5852160c8961d665e2313361d2bf106e6d294bf89_prof);

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
