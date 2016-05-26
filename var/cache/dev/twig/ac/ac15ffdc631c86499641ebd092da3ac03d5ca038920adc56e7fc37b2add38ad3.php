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
        $__internal_e1be97113bb49d3a7f48edc8de5aae325360a4782ecc83da4c4b35e54e464781 = $this->env->getExtension("native_profiler");
        $__internal_e1be97113bb49d3a7f48edc8de5aae325360a4782ecc83da4c4b35e54e464781->enter($__internal_e1be97113bb49d3a7f48edc8de5aae325360a4782ecc83da4c4b35e54e464781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e1be97113bb49d3a7f48edc8de5aae325360a4782ecc83da4c4b35e54e464781->leave($__internal_e1be97113bb49d3a7f48edc8de5aae325360a4782ecc83da4c4b35e54e464781_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e4322a2ea017f00d1978666da427134998227c3170b93c628bcdf07bb171b6ba = $this->env->getExtension("native_profiler");
        $__internal_e4322a2ea017f00d1978666da427134998227c3170b93c628bcdf07bb171b6ba->enter($__internal_e4322a2ea017f00d1978666da427134998227c3170b93c628bcdf07bb171b6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e4322a2ea017f00d1978666da427134998227c3170b93c628bcdf07bb171b6ba->leave($__internal_e4322a2ea017f00d1978666da427134998227c3170b93c628bcdf07bb171b6ba_prof);

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
