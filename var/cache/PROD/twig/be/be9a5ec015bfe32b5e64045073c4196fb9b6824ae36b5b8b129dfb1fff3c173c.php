<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_7ea97511f53ec4983be75548585a3808067f21c1ec442ed704f8d4eb7d133d9c extends Twig_Template
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
        $__internal_7b431eaf5b345692a4a8b443197b9ed57f4e2a629526f01baff2be81b3651f1b = $this->env->getExtension("native_profiler");
        $__internal_7b431eaf5b345692a4a8b443197b9ed57f4e2a629526f01baff2be81b3651f1b->enter($__internal_7b431eaf5b345692a4a8b443197b9ed57f4e2a629526f01baff2be81b3651f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_7b431eaf5b345692a4a8b443197b9ed57f4e2a629526f01baff2be81b3651f1b->leave($__internal_7b431eaf5b345692a4a8b443197b9ed57f4e2a629526f01baff2be81b3651f1b_prof);

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
