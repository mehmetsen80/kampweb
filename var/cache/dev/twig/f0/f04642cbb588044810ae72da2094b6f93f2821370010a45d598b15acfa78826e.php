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
        $__internal_847e72866732cef91fa56c5b94c6651ceed87f98bae8210eb1b42260ac420bb5 = $this->env->getExtension("native_profiler");
        $__internal_847e72866732cef91fa56c5b94c6651ceed87f98bae8210eb1b42260ac420bb5->enter($__internal_847e72866732cef91fa56c5b94c6651ceed87f98bae8210eb1b42260ac420bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_847e72866732cef91fa56c5b94c6651ceed87f98bae8210eb1b42260ac420bb5->leave($__internal_847e72866732cef91fa56c5b94c6651ceed87f98bae8210eb1b42260ac420bb5_prof);

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
