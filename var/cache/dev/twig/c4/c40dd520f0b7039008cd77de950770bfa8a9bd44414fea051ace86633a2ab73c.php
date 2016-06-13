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
        $__internal_9ffaf5af7de2c092a87e2c6fe7edbeeb61d83c186c96f2351d58d296f6236e84 = $this->env->getExtension("native_profiler");
        $__internal_9ffaf5af7de2c092a87e2c6fe7edbeeb61d83c186c96f2351d58d296f6236e84->enter($__internal_9ffaf5af7de2c092a87e2c6fe7edbeeb61d83c186c96f2351d58d296f6236e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ffaf5af7de2c092a87e2c6fe7edbeeb61d83c186c96f2351d58d296f6236e84->leave($__internal_9ffaf5af7de2c092a87e2c6fe7edbeeb61d83c186c96f2351d58d296f6236e84_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5a769f0125ca46191369f2863f1b945c2aa8b2da8b0c07856ad768604b3536f4 = $this->env->getExtension("native_profiler");
        $__internal_5a769f0125ca46191369f2863f1b945c2aa8b2da8b0c07856ad768604b3536f4->enter($__internal_5a769f0125ca46191369f2863f1b945c2aa8b2da8b0c07856ad768604b3536f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5a769f0125ca46191369f2863f1b945c2aa8b2da8b0c07856ad768604b3536f4->leave($__internal_5a769f0125ca46191369f2863f1b945c2aa8b2da8b0c07856ad768604b3536f4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4cdb2c1edf6c7ab3ad82103034fe58f1a06151e00347682b310d62164eff2aa4 = $this->env->getExtension("native_profiler");
        $__internal_4cdb2c1edf6c7ab3ad82103034fe58f1a06151e00347682b310d62164eff2aa4->enter($__internal_4cdb2c1edf6c7ab3ad82103034fe58f1a06151e00347682b310d62164eff2aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4cdb2c1edf6c7ab3ad82103034fe58f1a06151e00347682b310d62164eff2aa4->leave($__internal_4cdb2c1edf6c7ab3ad82103034fe58f1a06151e00347682b310d62164eff2aa4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f6b5592a4b4c061f1642767fc8a4cdeb9ec22dc5706bf6ec430f90fa284288bf = $this->env->getExtension("native_profiler");
        $__internal_f6b5592a4b4c061f1642767fc8a4cdeb9ec22dc5706bf6ec430f90fa284288bf->enter($__internal_f6b5592a4b4c061f1642767fc8a4cdeb9ec22dc5706bf6ec430f90fa284288bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f6b5592a4b4c061f1642767fc8a4cdeb9ec22dc5706bf6ec430f90fa284288bf->leave($__internal_f6b5592a4b4c061f1642767fc8a4cdeb9ec22dc5706bf6ec430f90fa284288bf_prof);

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
