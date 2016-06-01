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
        $__internal_1e10b10a6b837d50be6365096175dc06a9a7feb92cd245410c8d933f13f389a2 = $this->env->getExtension("native_profiler");
        $__internal_1e10b10a6b837d50be6365096175dc06a9a7feb92cd245410c8d933f13f389a2->enter($__internal_1e10b10a6b837d50be6365096175dc06a9a7feb92cd245410c8d933f13f389a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_1e10b10a6b837d50be6365096175dc06a9a7feb92cd245410c8d933f13f389a2->leave($__internal_1e10b10a6b837d50be6365096175dc06a9a7feb92cd245410c8d933f13f389a2_prof);

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
