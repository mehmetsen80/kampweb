<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_203cb8d1693ae8a0d794d8bc7f046bb175679febfe4a65c273f61a41bd2c8e04 extends Twig_Template
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
        $__internal_2d327dfb80a72d480fdf24155ce46bcc84668376dcf2b58ff4d93c1633ef159a = $this->env->getExtension("native_profiler");
        $__internal_2d327dfb80a72d480fdf24155ce46bcc84668376dcf2b58ff4d93c1633ef159a->enter($__internal_2d327dfb80a72d480fdf24155ce46bcc84668376dcf2b58ff4d93c1633ef159a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2d327dfb80a72d480fdf24155ce46bcc84668376dcf2b58ff4d93c1633ef159a->leave($__internal_2d327dfb80a72d480fdf24155ce46bcc84668376dcf2b58ff4d93c1633ef159a_prof);

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
