<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0940e56dd6c36175356692fda5cbbc600597f5c588073574299e9ff1f7884832 extends Twig_Template
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
        $__internal_0afe836375b2638806b34c2847f02aa3717d1a436e16fd80a40d0d163d614053 = $this->env->getExtension("native_profiler");
        $__internal_0afe836375b2638806b34c2847f02aa3717d1a436e16fd80a40d0d163d614053->enter($__internal_0afe836375b2638806b34c2847f02aa3717d1a436e16fd80a40d0d163d614053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_0afe836375b2638806b34c2847f02aa3717d1a436e16fd80a40d0d163d614053->leave($__internal_0afe836375b2638806b34c2847f02aa3717d1a436e16fd80a40d0d163d614053_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
