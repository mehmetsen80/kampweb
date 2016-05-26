<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c6054aa50ee48e0aa38200a9a6b316b11add642cd6b0e1a2993212f1fc03fda3 extends Twig_Template
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
        $__internal_c5282e92e93d271cf5e4b1c4657e289886d5efdadd7b8d0668ccbc3c0036562a = $this->env->getExtension("native_profiler");
        $__internal_c5282e92e93d271cf5e4b1c4657e289886d5efdadd7b8d0668ccbc3c0036562a->enter($__internal_c5282e92e93d271cf5e4b1c4657e289886d5efdadd7b8d0668ccbc3c0036562a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c5282e92e93d271cf5e4b1c4657e289886d5efdadd7b8d0668ccbc3c0036562a->leave($__internal_c5282e92e93d271cf5e4b1c4657e289886d5efdadd7b8d0668ccbc3c0036562a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
