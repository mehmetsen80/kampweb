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
        $__internal_46f426c37c66a7e7de34f38b9b48e59d9b21014019f1c397c49a4830bdede897 = $this->env->getExtension("native_profiler");
        $__internal_46f426c37c66a7e7de34f38b9b48e59d9b21014019f1c397c49a4830bdede897->enter($__internal_46f426c37c66a7e7de34f38b9b48e59d9b21014019f1c397c49a4830bdede897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_46f426c37c66a7e7de34f38b9b48e59d9b21014019f1c397c49a4830bdede897->leave($__internal_46f426c37c66a7e7de34f38b9b48e59d9b21014019f1c397c49a4830bdede897_prof);

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
