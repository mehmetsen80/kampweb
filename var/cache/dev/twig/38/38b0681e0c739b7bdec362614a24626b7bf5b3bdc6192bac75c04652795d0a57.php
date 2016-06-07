<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c94e2b7825ea22beabe1056b727af0b3bda5353d5b2ac288f38f121ec86ba2e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b053274ee0299427759218d6d75bbf33896a009cabae3d3a81b8cdeedf30acca = $this->env->getExtension("native_profiler");
        $__internal_b053274ee0299427759218d6d75bbf33896a009cabae3d3a81b8cdeedf30acca->enter($__internal_b053274ee0299427759218d6d75bbf33896a009cabae3d3a81b8cdeedf30acca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b053274ee0299427759218d6d75bbf33896a009cabae3d3a81b8cdeedf30acca->leave($__internal_b053274ee0299427759218d6d75bbf33896a009cabae3d3a81b8cdeedf30acca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
