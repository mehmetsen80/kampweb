<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d59e3d426b5ed831e8825beaaa7d032c8461e13ce07910bd63c35c28d904685c extends Twig_Template
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
        $__internal_7dc747f1b62874a7c7cb3a0699371e6b204e0810fb19295b29a779d95b91be1b = $this->env->getExtension("native_profiler");
        $__internal_7dc747f1b62874a7c7cb3a0699371e6b204e0810fb19295b29a779d95b91be1b->enter($__internal_7dc747f1b62874a7c7cb3a0699371e6b204e0810fb19295b29a779d95b91be1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7dc747f1b62874a7c7cb3a0699371e6b204e0810fb19295b29a779d95b91be1b->leave($__internal_7dc747f1b62874a7c7cb3a0699371e6b204e0810fb19295b29a779d95b91be1b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
