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
        $__internal_2c94c6aaa71fec759edc5843a8e873ebdf3302344e197dfaab8edf508008bf78 = $this->env->getExtension("native_profiler");
        $__internal_2c94c6aaa71fec759edc5843a8e873ebdf3302344e197dfaab8edf508008bf78->enter($__internal_2c94c6aaa71fec759edc5843a8e873ebdf3302344e197dfaab8edf508008bf78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2c94c6aaa71fec759edc5843a8e873ebdf3302344e197dfaab8edf508008bf78->leave($__internal_2c94c6aaa71fec759edc5843a8e873ebdf3302344e197dfaab8edf508008bf78_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_39f0c2caf3b1944a3f22b13b12f2eab416f1ff08d7f54d4a56ec05b6faf13188 = $this->env->getExtension("native_profiler");
        $__internal_39f0c2caf3b1944a3f22b13b12f2eab416f1ff08d7f54d4a56ec05b6faf13188->enter($__internal_39f0c2caf3b1944a3f22b13b12f2eab416f1ff08d7f54d4a56ec05b6faf13188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_39f0c2caf3b1944a3f22b13b12f2eab416f1ff08d7f54d4a56ec05b6faf13188->leave($__internal_39f0c2caf3b1944a3f22b13b12f2eab416f1ff08d7f54d4a56ec05b6faf13188_prof);

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
