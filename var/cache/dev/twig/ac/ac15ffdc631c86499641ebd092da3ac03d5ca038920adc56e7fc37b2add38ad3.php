<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8bf74d5199e4b2e4c970628818c9ec6a073cb754ca65eba4a871412bb4889419 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7055a02451d94714a2cd37fdd789c24132ed10b0fd839e850421460462e437af = $this->env->getExtension("native_profiler");
        $__internal_7055a02451d94714a2cd37fdd789c24132ed10b0fd839e850421460462e437af->enter($__internal_7055a02451d94714a2cd37fdd789c24132ed10b0fd839e850421460462e437af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7055a02451d94714a2cd37fdd789c24132ed10b0fd839e850421460462e437af->leave($__internal_7055a02451d94714a2cd37fdd789c24132ed10b0fd839e850421460462e437af_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_54e31808e8ee02abd5c5dad631f3ede20d740a6f790b3abb8ef51703b0819a90 = $this->env->getExtension("native_profiler");
        $__internal_54e31808e8ee02abd5c5dad631f3ede20d740a6f790b3abb8ef51703b0819a90->enter($__internal_54e31808e8ee02abd5c5dad631f3ede20d740a6f790b3abb8ef51703b0819a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_54e31808e8ee02abd5c5dad631f3ede20d740a6f790b3abb8ef51703b0819a90->leave($__internal_54e31808e8ee02abd5c5dad631f3ede20d740a6f790b3abb8ef51703b0819a90_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
