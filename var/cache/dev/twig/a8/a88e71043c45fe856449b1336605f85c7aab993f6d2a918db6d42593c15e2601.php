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
        $__internal_8500ac10359f1529fba364dbda44829bf75535e2e87c036c3ca1cbba56668290 = $this->env->getExtension("native_profiler");
        $__internal_8500ac10359f1529fba364dbda44829bf75535e2e87c036c3ca1cbba56668290->enter($__internal_8500ac10359f1529fba364dbda44829bf75535e2e87c036c3ca1cbba56668290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_8500ac10359f1529fba364dbda44829bf75535e2e87c036c3ca1cbba56668290->leave($__internal_8500ac10359f1529fba364dbda44829bf75535e2e87c036c3ca1cbba56668290_prof);

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
