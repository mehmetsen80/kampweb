<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_acb1a617fd17ae041f7e743e3e44d18d494007ebc938db08381c92eca87b405c extends Twig_Template
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
        $__internal_8f6ad0d1714edf03c96cc09930ff994aed8093c14167adb6130d3baf4e57df94 = $this->env->getExtension("native_profiler");
        $__internal_8f6ad0d1714edf03c96cc09930ff994aed8093c14167adb6130d3baf4e57df94->enter($__internal_8f6ad0d1714edf03c96cc09930ff994aed8093c14167adb6130d3baf4e57df94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_8f6ad0d1714edf03c96cc09930ff994aed8093c14167adb6130d3baf4e57df94->leave($__internal_8f6ad0d1714edf03c96cc09930ff994aed8093c14167adb6130d3baf4e57df94_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
