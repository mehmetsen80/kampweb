<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_938f1cb7e6f563e949dda14b1c25b87361e53eec4f870c6078781fa7da5810ac extends Twig_Template
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
        $__internal_acad1695780dbe9b3d969de077938c1b26b33974143c3a8fe7d127729b8d90eb = $this->env->getExtension("native_profiler");
        $__internal_acad1695780dbe9b3d969de077938c1b26b33974143c3a8fe7d127729b8d90eb->enter($__internal_acad1695780dbe9b3d969de077938c1b26b33974143c3a8fe7d127729b8d90eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_acad1695780dbe9b3d969de077938c1b26b33974143c3a8fe7d127729b8d90eb->leave($__internal_acad1695780dbe9b3d969de077938c1b26b33974143c3a8fe7d127729b8d90eb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
