<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_3ff66836dc6225c6fbaf36fd040142c459728de790c8dfb674f0fd03ca982270 extends Twig_Template
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
        $__internal_4c455520eb84442f58b981c48075c149588586eaf8628fc183127e56402fb9b8 = $this->env->getExtension("native_profiler");
        $__internal_4c455520eb84442f58b981c48075c149588586eaf8628fc183127e56402fb9b8->enter($__internal_4c455520eb84442f58b981c48075c149588586eaf8628fc183127e56402fb9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_4c455520eb84442f58b981c48075c149588586eaf8628fc183127e56402fb9b8->leave($__internal_4c455520eb84442f58b981c48075c149588586eaf8628fc183127e56402fb9b8_prof);

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
