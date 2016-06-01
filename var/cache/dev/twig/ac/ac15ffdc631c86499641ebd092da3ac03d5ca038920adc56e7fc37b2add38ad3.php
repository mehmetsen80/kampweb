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
        $__internal_cb05f86c2de4952b3ce8ec78458fb630760be76101ef738838b7c816b5ca200f = $this->env->getExtension("native_profiler");
        $__internal_cb05f86c2de4952b3ce8ec78458fb630760be76101ef738838b7c816b5ca200f->enter($__internal_cb05f86c2de4952b3ce8ec78458fb630760be76101ef738838b7c816b5ca200f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cb05f86c2de4952b3ce8ec78458fb630760be76101ef738838b7c816b5ca200f->leave($__internal_cb05f86c2de4952b3ce8ec78458fb630760be76101ef738838b7c816b5ca200f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_83472999bd8e4b9e6156e787e644c20cff69021ee6a1aba4a3cbb474c79a7bcd = $this->env->getExtension("native_profiler");
        $__internal_83472999bd8e4b9e6156e787e644c20cff69021ee6a1aba4a3cbb474c79a7bcd->enter($__internal_83472999bd8e4b9e6156e787e644c20cff69021ee6a1aba4a3cbb474c79a7bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_83472999bd8e4b9e6156e787e644c20cff69021ee6a1aba4a3cbb474c79a7bcd->leave($__internal_83472999bd8e4b9e6156e787e644c20cff69021ee6a1aba4a3cbb474c79a7bcd_prof);

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
