<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_50947836df30fb4aedf6abcbf5b1f339f710639c4876e2411aa41baa51fa93fd extends Twig_Template
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
        $__internal_aab8ba0598e3df0ac3d8f3688e5541c075d38544289cf024af67b761341fb97a = $this->env->getExtension("native_profiler");
        $__internal_aab8ba0598e3df0ac3d8f3688e5541c075d38544289cf024af67b761341fb97a->enter($__internal_aab8ba0598e3df0ac3d8f3688e5541c075d38544289cf024af67b761341fb97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_aab8ba0598e3df0ac3d8f3688e5541c075d38544289cf024af67b761341fb97a->leave($__internal_aab8ba0598e3df0ac3d8f3688e5541c075d38544289cf024af67b761341fb97a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
