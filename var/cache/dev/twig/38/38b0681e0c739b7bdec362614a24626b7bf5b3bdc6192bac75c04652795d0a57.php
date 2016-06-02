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
        $__internal_6bdd229043d7062fd3a4ffcae91487228008ae1fdf43aad08e06d9811f331124 = $this->env->getExtension("native_profiler");
        $__internal_6bdd229043d7062fd3a4ffcae91487228008ae1fdf43aad08e06d9811f331124->enter($__internal_6bdd229043d7062fd3a4ffcae91487228008ae1fdf43aad08e06d9811f331124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6bdd229043d7062fd3a4ffcae91487228008ae1fdf43aad08e06d9811f331124->leave($__internal_6bdd229043d7062fd3a4ffcae91487228008ae1fdf43aad08e06d9811f331124_prof);

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
