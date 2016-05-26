<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f4b968c0177535804fa70940e8fe095f1668b62e799f957d7a87d0b5be002473 extends Twig_Template
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
        $__internal_8854adf5fd848ab413a5cb00bc2e4848d52c0d786c96dcb0bb1f1e8b0272ea0a = $this->env->getExtension("native_profiler");
        $__internal_8854adf5fd848ab413a5cb00bc2e4848d52c0d786c96dcb0bb1f1e8b0272ea0a->enter($__internal_8854adf5fd848ab413a5cb00bc2e4848d52c0d786c96dcb0bb1f1e8b0272ea0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_8854adf5fd848ab413a5cb00bc2e4848d52c0d786c96dcb0bb1f1e8b0272ea0a->leave($__internal_8854adf5fd848ab413a5cb00bc2e4848d52c0d786c96dcb0bb1f1e8b0272ea0a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
