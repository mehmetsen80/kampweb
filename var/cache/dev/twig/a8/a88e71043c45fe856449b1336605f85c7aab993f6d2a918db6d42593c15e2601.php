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
        $__internal_c12cb6e5d0f9bbc51c091426bcd2b8dfac9f1f873627e74cb856adb8f74e50fb = $this->env->getExtension("native_profiler");
        $__internal_c12cb6e5d0f9bbc51c091426bcd2b8dfac9f1f873627e74cb856adb8f74e50fb->enter($__internal_c12cb6e5d0f9bbc51c091426bcd2b8dfac9f1f873627e74cb856adb8f74e50fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_c12cb6e5d0f9bbc51c091426bcd2b8dfac9f1f873627e74cb856adb8f74e50fb->leave($__internal_c12cb6e5d0f9bbc51c091426bcd2b8dfac9f1f873627e74cb856adb8f74e50fb_prof);

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
