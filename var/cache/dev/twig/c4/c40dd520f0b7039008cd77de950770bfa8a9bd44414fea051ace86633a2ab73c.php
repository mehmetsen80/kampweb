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
        $__internal_726d73647f9a2624928da4e4c1bb33cfe8c7c440da2197c5695c72abae620c5e = $this->env->getExtension("native_profiler");
        $__internal_726d73647f9a2624928da4e4c1bb33cfe8c7c440da2197c5695c72abae620c5e->enter($__internal_726d73647f9a2624928da4e4c1bb33cfe8c7c440da2197c5695c72abae620c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_726d73647f9a2624928da4e4c1bb33cfe8c7c440da2197c5695c72abae620c5e->leave($__internal_726d73647f9a2624928da4e4c1bb33cfe8c7c440da2197c5695c72abae620c5e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6809a0ded0542737c54e121a775aea1e1bc611464bb652ba420b416ee45cb198 = $this->env->getExtension("native_profiler");
        $__internal_6809a0ded0542737c54e121a775aea1e1bc611464bb652ba420b416ee45cb198->enter($__internal_6809a0ded0542737c54e121a775aea1e1bc611464bb652ba420b416ee45cb198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6809a0ded0542737c54e121a775aea1e1bc611464bb652ba420b416ee45cb198->leave($__internal_6809a0ded0542737c54e121a775aea1e1bc611464bb652ba420b416ee45cb198_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c685de080a32595e4515653f2d579e0ab6e52d6dd79ac44e86c6a380a4f43ddd = $this->env->getExtension("native_profiler");
        $__internal_c685de080a32595e4515653f2d579e0ab6e52d6dd79ac44e86c6a380a4f43ddd->enter($__internal_c685de080a32595e4515653f2d579e0ab6e52d6dd79ac44e86c6a380a4f43ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c685de080a32595e4515653f2d579e0ab6e52d6dd79ac44e86c6a380a4f43ddd->leave($__internal_c685de080a32595e4515653f2d579e0ab6e52d6dd79ac44e86c6a380a4f43ddd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_05dd6ce05360a35b2dfde331e53d2c920f106cf2f56375dd940a7b8eb8d500f0 = $this->env->getExtension("native_profiler");
        $__internal_05dd6ce05360a35b2dfde331e53d2c920f106cf2f56375dd940a7b8eb8d500f0->enter($__internal_05dd6ce05360a35b2dfde331e53d2c920f106cf2f56375dd940a7b8eb8d500f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_05dd6ce05360a35b2dfde331e53d2c920f106cf2f56375dd940a7b8eb8d500f0->leave($__internal_05dd6ce05360a35b2dfde331e53d2c920f106cf2f56375dd940a7b8eb8d500f0_prof);

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
