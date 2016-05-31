<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e77ca82f833ef502c9f782106c239c1e1dd94ec49c5cb17c7dbf782a2bd39a71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e50d52dcdedece6b0ba6b2d6b71d355e279ab71f38e2e2ad0cf20446d3f9d2c2 = $this->env->getExtension("native_profiler");
        $__internal_e50d52dcdedece6b0ba6b2d6b71d355e279ab71f38e2e2ad0cf20446d3f9d2c2->enter($__internal_e50d52dcdedece6b0ba6b2d6b71d355e279ab71f38e2e2ad0cf20446d3f9d2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e50d52dcdedece6b0ba6b2d6b71d355e279ab71f38e2e2ad0cf20446d3f9d2c2->leave($__internal_e50d52dcdedece6b0ba6b2d6b71d355e279ab71f38e2e2ad0cf20446d3f9d2c2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3795b7f4964ac78cd588f9dcccc38996edd421c22942c716d4ca6a9b09081dc2 = $this->env->getExtension("native_profiler");
        $__internal_3795b7f4964ac78cd588f9dcccc38996edd421c22942c716d4ca6a9b09081dc2->enter($__internal_3795b7f4964ac78cd588f9dcccc38996edd421c22942c716d4ca6a9b09081dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3795b7f4964ac78cd588f9dcccc38996edd421c22942c716d4ca6a9b09081dc2->leave($__internal_3795b7f4964ac78cd588f9dcccc38996edd421c22942c716d4ca6a9b09081dc2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b451081d0c1743ef7819adeda2108ea91afbf67cdf555607f5f8e6d126f5fa32 = $this->env->getExtension("native_profiler");
        $__internal_b451081d0c1743ef7819adeda2108ea91afbf67cdf555607f5f8e6d126f5fa32->enter($__internal_b451081d0c1743ef7819adeda2108ea91afbf67cdf555607f5f8e6d126f5fa32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b451081d0c1743ef7819adeda2108ea91afbf67cdf555607f5f8e6d126f5fa32->leave($__internal_b451081d0c1743ef7819adeda2108ea91afbf67cdf555607f5f8e6d126f5fa32_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d3c897a34b8fc609b1c5d77f57ba3327545eb7543544ea0f193e049e272b261 = $this->env->getExtension("native_profiler");
        $__internal_6d3c897a34b8fc609b1c5d77f57ba3327545eb7543544ea0f193e049e272b261->enter($__internal_6d3c897a34b8fc609b1c5d77f57ba3327545eb7543544ea0f193e049e272b261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6d3c897a34b8fc609b1c5d77f57ba3327545eb7543544ea0f193e049e272b261->leave($__internal_6d3c897a34b8fc609b1c5d77f57ba3327545eb7543544ea0f193e049e272b261_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
