<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_14bdda47e0601e9f904f10b1fd41b12cfd665012c3496ee236abfdd4d9ab7e0f extends Twig_Template
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
        $__internal_a5ebec2c92a825018c1aa7b107793d557055c6dcfb09c860a467dd9ba5bf6271 = $this->env->getExtension("native_profiler");
        $__internal_a5ebec2c92a825018c1aa7b107793d557055c6dcfb09c860a467dd9ba5bf6271->enter($__internal_a5ebec2c92a825018c1aa7b107793d557055c6dcfb09c860a467dd9ba5bf6271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a5ebec2c92a825018c1aa7b107793d557055c6dcfb09c860a467dd9ba5bf6271->leave($__internal_a5ebec2c92a825018c1aa7b107793d557055c6dcfb09c860a467dd9ba5bf6271_prof);

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
