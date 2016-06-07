<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c027cf16061dfa937e4db0beb4bcff8cd1ff03d86756e0aa8382aa175534e5d9 extends Twig_Template
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
        $__internal_7c735a34d07da879a78d94debea77ddc97f00a298f95b70c8a8828a1d583743d = $this->env->getExtension("native_profiler");
        $__internal_7c735a34d07da879a78d94debea77ddc97f00a298f95b70c8a8828a1d583743d->enter($__internal_7c735a34d07da879a78d94debea77ddc97f00a298f95b70c8a8828a1d583743d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7c735a34d07da879a78d94debea77ddc97f00a298f95b70c8a8828a1d583743d->leave($__internal_7c735a34d07da879a78d94debea77ddc97f00a298f95b70c8a8828a1d583743d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
