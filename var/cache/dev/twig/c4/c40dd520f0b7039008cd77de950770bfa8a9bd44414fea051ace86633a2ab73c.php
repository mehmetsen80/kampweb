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
        $__internal_9d47ac45cd9259860cf8b4812c919ce6d94f3436881e1e1877dd18f26a8cd5fc = $this->env->getExtension("native_profiler");
        $__internal_9d47ac45cd9259860cf8b4812c919ce6d94f3436881e1e1877dd18f26a8cd5fc->enter($__internal_9d47ac45cd9259860cf8b4812c919ce6d94f3436881e1e1877dd18f26a8cd5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d47ac45cd9259860cf8b4812c919ce6d94f3436881e1e1877dd18f26a8cd5fc->leave($__internal_9d47ac45cd9259860cf8b4812c919ce6d94f3436881e1e1877dd18f26a8cd5fc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_20d343448a782b10c02cc6d340d280192d062649982e057dbe8914021deecfbe = $this->env->getExtension("native_profiler");
        $__internal_20d343448a782b10c02cc6d340d280192d062649982e057dbe8914021deecfbe->enter($__internal_20d343448a782b10c02cc6d340d280192d062649982e057dbe8914021deecfbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_20d343448a782b10c02cc6d340d280192d062649982e057dbe8914021deecfbe->leave($__internal_20d343448a782b10c02cc6d340d280192d062649982e057dbe8914021deecfbe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d923bedf87e591fb3b45e065b6a79b2f79d63d50dd25d53a0b5b456481a46044 = $this->env->getExtension("native_profiler");
        $__internal_d923bedf87e591fb3b45e065b6a79b2f79d63d50dd25d53a0b5b456481a46044->enter($__internal_d923bedf87e591fb3b45e065b6a79b2f79d63d50dd25d53a0b5b456481a46044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d923bedf87e591fb3b45e065b6a79b2f79d63d50dd25d53a0b5b456481a46044->leave($__internal_d923bedf87e591fb3b45e065b6a79b2f79d63d50dd25d53a0b5b456481a46044_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f65dba044fee7fc566a0dec336af39ab33a49b56bc03d64eb2b8ed07b1d4fb77 = $this->env->getExtension("native_profiler");
        $__internal_f65dba044fee7fc566a0dec336af39ab33a49b56bc03d64eb2b8ed07b1d4fb77->enter($__internal_f65dba044fee7fc566a0dec336af39ab33a49b56bc03d64eb2b8ed07b1d4fb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f65dba044fee7fc566a0dec336af39ab33a49b56bc03d64eb2b8ed07b1d4fb77->leave($__internal_f65dba044fee7fc566a0dec336af39ab33a49b56bc03d64eb2b8ed07b1d4fb77_prof);

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
