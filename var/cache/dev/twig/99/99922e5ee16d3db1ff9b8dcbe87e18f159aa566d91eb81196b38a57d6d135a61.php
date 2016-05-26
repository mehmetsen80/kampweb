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
        $__internal_3ca74404c5f72cf1007cb4a6d76de7dc4e53ee01956d551c4a40221aeadf1e1d = $this->env->getExtension("native_profiler");
        $__internal_3ca74404c5f72cf1007cb4a6d76de7dc4e53ee01956d551c4a40221aeadf1e1d->enter($__internal_3ca74404c5f72cf1007cb4a6d76de7dc4e53ee01956d551c4a40221aeadf1e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_3ca74404c5f72cf1007cb4a6d76de7dc4e53ee01956d551c4a40221aeadf1e1d->leave($__internal_3ca74404c5f72cf1007cb4a6d76de7dc4e53ee01956d551c4a40221aeadf1e1d_prof);

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
