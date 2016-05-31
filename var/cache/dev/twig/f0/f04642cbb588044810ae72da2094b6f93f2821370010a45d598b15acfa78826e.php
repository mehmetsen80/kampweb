<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_6d9d094cbc023bfd2e31a090915a5403b09b2beaabd35a8daa87537ca4eba0f5 extends Twig_Template
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
        $__internal_a21184177b9c45cf85bd07ef1055d90694b1c869b47b5cb2994850af96271735 = $this->env->getExtension("native_profiler");
        $__internal_a21184177b9c45cf85bd07ef1055d90694b1c869b47b5cb2994850af96271735->enter($__internal_a21184177b9c45cf85bd07ef1055d90694b1c869b47b5cb2994850af96271735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a21184177b9c45cf85bd07ef1055d90694b1c869b47b5cb2994850af96271735->leave($__internal_a21184177b9c45cf85bd07ef1055d90694b1c869b47b5cb2994850af96271735_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
