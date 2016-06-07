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
        $__internal_ad5b84252bfc7b131b8bcb4f384efff4a8a12e1f7af5eb2fd1ae4968367d670f = $this->env->getExtension("native_profiler");
        $__internal_ad5b84252bfc7b131b8bcb4f384efff4a8a12e1f7af5eb2fd1ae4968367d670f->enter($__internal_ad5b84252bfc7b131b8bcb4f384efff4a8a12e1f7af5eb2fd1ae4968367d670f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad5b84252bfc7b131b8bcb4f384efff4a8a12e1f7af5eb2fd1ae4968367d670f->leave($__internal_ad5b84252bfc7b131b8bcb4f384efff4a8a12e1f7af5eb2fd1ae4968367d670f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4b5ccb6a15d02e3201aff86c93b26ce80ed918d8e9830d2811c996877088f748 = $this->env->getExtension("native_profiler");
        $__internal_4b5ccb6a15d02e3201aff86c93b26ce80ed918d8e9830d2811c996877088f748->enter($__internal_4b5ccb6a15d02e3201aff86c93b26ce80ed918d8e9830d2811c996877088f748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4b5ccb6a15d02e3201aff86c93b26ce80ed918d8e9830d2811c996877088f748->leave($__internal_4b5ccb6a15d02e3201aff86c93b26ce80ed918d8e9830d2811c996877088f748_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ea28c2cdbe98ee63d671f978dbdb8b0c6035ac8a36edabadbd260f23f9d717b0 = $this->env->getExtension("native_profiler");
        $__internal_ea28c2cdbe98ee63d671f978dbdb8b0c6035ac8a36edabadbd260f23f9d717b0->enter($__internal_ea28c2cdbe98ee63d671f978dbdb8b0c6035ac8a36edabadbd260f23f9d717b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ea28c2cdbe98ee63d671f978dbdb8b0c6035ac8a36edabadbd260f23f9d717b0->leave($__internal_ea28c2cdbe98ee63d671f978dbdb8b0c6035ac8a36edabadbd260f23f9d717b0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e3c32a8f046f8d41c47b272cac99d0439df3ad1a6b20086f6300fe60a335384 = $this->env->getExtension("native_profiler");
        $__internal_0e3c32a8f046f8d41c47b272cac99d0439df3ad1a6b20086f6300fe60a335384->enter($__internal_0e3c32a8f046f8d41c47b272cac99d0439df3ad1a6b20086f6300fe60a335384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0e3c32a8f046f8d41c47b272cac99d0439df3ad1a6b20086f6300fe60a335384->leave($__internal_0e3c32a8f046f8d41c47b272cac99d0439df3ad1a6b20086f6300fe60a335384_prof);

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
