<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0cc974cd0a956cf41eadd96261dac572a4b4a582d84fad795ed91a2112119377 extends Twig_Template
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
        $__internal_a558d7bb0285f3931c62f9091e4a5eea68d340b4de366200c8aaffe331116a0f = $this->env->getExtension("native_profiler");
        $__internal_a558d7bb0285f3931c62f9091e4a5eea68d340b4de366200c8aaffe331116a0f->enter($__internal_a558d7bb0285f3931c62f9091e4a5eea68d340b4de366200c8aaffe331116a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a558d7bb0285f3931c62f9091e4a5eea68d340b4de366200c8aaffe331116a0f->leave($__internal_a558d7bb0285f3931c62f9091e4a5eea68d340b4de366200c8aaffe331116a0f_prof);

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
