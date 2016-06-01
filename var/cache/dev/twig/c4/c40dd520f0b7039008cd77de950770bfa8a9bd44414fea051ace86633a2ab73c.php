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
        $__internal_54d7565c7c3dd46207beb526e8555b315b3f724dc40a14afcdf1ea76dee238f9 = $this->env->getExtension("native_profiler");
        $__internal_54d7565c7c3dd46207beb526e8555b315b3f724dc40a14afcdf1ea76dee238f9->enter($__internal_54d7565c7c3dd46207beb526e8555b315b3f724dc40a14afcdf1ea76dee238f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54d7565c7c3dd46207beb526e8555b315b3f724dc40a14afcdf1ea76dee238f9->leave($__internal_54d7565c7c3dd46207beb526e8555b315b3f724dc40a14afcdf1ea76dee238f9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f65ba6d464d80caf5d26efad94e414b753c96b0ec918a00acad7c19422489c7b = $this->env->getExtension("native_profiler");
        $__internal_f65ba6d464d80caf5d26efad94e414b753c96b0ec918a00acad7c19422489c7b->enter($__internal_f65ba6d464d80caf5d26efad94e414b753c96b0ec918a00acad7c19422489c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f65ba6d464d80caf5d26efad94e414b753c96b0ec918a00acad7c19422489c7b->leave($__internal_f65ba6d464d80caf5d26efad94e414b753c96b0ec918a00acad7c19422489c7b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ffe327a7b1290cf52db76c576d43859a180488f48f10f60bda773e2fd88dae28 = $this->env->getExtension("native_profiler");
        $__internal_ffe327a7b1290cf52db76c576d43859a180488f48f10f60bda773e2fd88dae28->enter($__internal_ffe327a7b1290cf52db76c576d43859a180488f48f10f60bda773e2fd88dae28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ffe327a7b1290cf52db76c576d43859a180488f48f10f60bda773e2fd88dae28->leave($__internal_ffe327a7b1290cf52db76c576d43859a180488f48f10f60bda773e2fd88dae28_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c59541bacbaa40f49d99eb8c72a8b7749b1cb62da984eb9d6ce1b3beb1c1b143 = $this->env->getExtension("native_profiler");
        $__internal_c59541bacbaa40f49d99eb8c72a8b7749b1cb62da984eb9d6ce1b3beb1c1b143->enter($__internal_c59541bacbaa40f49d99eb8c72a8b7749b1cb62da984eb9d6ce1b3beb1c1b143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c59541bacbaa40f49d99eb8c72a8b7749b1cb62da984eb9d6ce1b3beb1c1b143->leave($__internal_c59541bacbaa40f49d99eb8c72a8b7749b1cb62da984eb9d6ce1b3beb1c1b143_prof);

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
