<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_07bab021d56a7a8b2b9f960e51cc1e763ca5f0abc14ec94f39d40a3dd8b3c202 extends Twig_Template
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
        $__internal_c6e0bbc349e3b5e0bf76b84e3f5ce818ac3908602753b02600e9f8c3e613f8a7 = $this->env->getExtension("native_profiler");
        $__internal_c6e0bbc349e3b5e0bf76b84e3f5ce818ac3908602753b02600e9f8c3e613f8a7->enter($__internal_c6e0bbc349e3b5e0bf76b84e3f5ce818ac3908602753b02600e9f8c3e613f8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c6e0bbc349e3b5e0bf76b84e3f5ce818ac3908602753b02600e9f8c3e613f8a7->leave($__internal_c6e0bbc349e3b5e0bf76b84e3f5ce818ac3908602753b02600e9f8c3e613f8a7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
