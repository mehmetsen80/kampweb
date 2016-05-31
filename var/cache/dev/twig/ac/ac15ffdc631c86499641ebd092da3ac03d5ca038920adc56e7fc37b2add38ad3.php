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
        $__internal_5325eb3533abe26570c8c8c1a3cf634c5a1e2f32a783a4ad365524a0806a04df = $this->env->getExtension("native_profiler");
        $__internal_5325eb3533abe26570c8c8c1a3cf634c5a1e2f32a783a4ad365524a0806a04df->enter($__internal_5325eb3533abe26570c8c8c1a3cf634c5a1e2f32a783a4ad365524a0806a04df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5325eb3533abe26570c8c8c1a3cf634c5a1e2f32a783a4ad365524a0806a04df->leave($__internal_5325eb3533abe26570c8c8c1a3cf634c5a1e2f32a783a4ad365524a0806a04df_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e4d4d060b91e251d7e84c0c6605287db8cb492c09de4a2db53981b11730c5b4f = $this->env->getExtension("native_profiler");
        $__internal_e4d4d060b91e251d7e84c0c6605287db8cb492c09de4a2db53981b11730c5b4f->enter($__internal_e4d4d060b91e251d7e84c0c6605287db8cb492c09de4a2db53981b11730c5b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e4d4d060b91e251d7e84c0c6605287db8cb492c09de4a2db53981b11730c5b4f->leave($__internal_e4d4d060b91e251d7e84c0c6605287db8cb492c09de4a2db53981b11730c5b4f_prof);

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
