<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_058068f11ffd4a91369a8624914fa49135db59baa207706e70e1d7f76d7ff0f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5aff7ac928e10f2ac9fe33800595999f4cee954cb0eca22441dfab0ff1bdc9b7 = $this->env->getExtension("native_profiler");
        $__internal_5aff7ac928e10f2ac9fe33800595999f4cee954cb0eca22441dfab0ff1bdc9b7->enter($__internal_5aff7ac928e10f2ac9fe33800595999f4cee954cb0eca22441dfab0ff1bdc9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5aff7ac928e10f2ac9fe33800595999f4cee954cb0eca22441dfab0ff1bdc9b7->leave($__internal_5aff7ac928e10f2ac9fe33800595999f4cee954cb0eca22441dfab0ff1bdc9b7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ed98f95bc6f8aa884b9db4ff45839373ad411deefce8b2ad9dc17a038cc3243 = $this->env->getExtension("native_profiler");
        $__internal_8ed98f95bc6f8aa884b9db4ff45839373ad411deefce8b2ad9dc17a038cc3243->enter($__internal_8ed98f95bc6f8aa884b9db4ff45839373ad411deefce8b2ad9dc17a038cc3243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8ed98f95bc6f8aa884b9db4ff45839373ad411deefce8b2ad9dc17a038cc3243->leave($__internal_8ed98f95bc6f8aa884b9db4ff45839373ad411deefce8b2ad9dc17a038cc3243_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_81b5b012c36eba446e4a6f62e9834b37e65a6bfb776217448dfe6f7548a3751b = $this->env->getExtension("native_profiler");
        $__internal_81b5b012c36eba446e4a6f62e9834b37e65a6bfb776217448dfe6f7548a3751b->enter($__internal_81b5b012c36eba446e4a6f62e9834b37e65a6bfb776217448dfe6f7548a3751b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_81b5b012c36eba446e4a6f62e9834b37e65a6bfb776217448dfe6f7548a3751b->leave($__internal_81b5b012c36eba446e4a6f62e9834b37e65a6bfb776217448dfe6f7548a3751b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
