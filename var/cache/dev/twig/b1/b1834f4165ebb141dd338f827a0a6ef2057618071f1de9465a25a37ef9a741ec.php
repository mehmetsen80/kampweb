<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_2c3b1f9db73f3b9929e939df3f28ef5797f4e44953b371c0a1f899b54bf1343f extends Twig_Template
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
        $__internal_4d8913ea1bc63cc4ddae3e05fa0d02509c54d7c16388d4e8d375d074bcc27976 = $this->env->getExtension("native_profiler");
        $__internal_4d8913ea1bc63cc4ddae3e05fa0d02509c54d7c16388d4e8d375d074bcc27976->enter($__internal_4d8913ea1bc63cc4ddae3e05fa0d02509c54d7c16388d4e8d375d074bcc27976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4d8913ea1bc63cc4ddae3e05fa0d02509c54d7c16388d4e8d375d074bcc27976->leave($__internal_4d8913ea1bc63cc4ddae3e05fa0d02509c54d7c16388d4e8d375d074bcc27976_prof);

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
