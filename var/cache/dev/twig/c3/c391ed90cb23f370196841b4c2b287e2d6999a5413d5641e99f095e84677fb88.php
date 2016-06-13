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
        $__internal_c17510a7ae72b27cddab82a00825354fa3e6d33c5194953dbf1c075a6a1d7fb0 = $this->env->getExtension("native_profiler");
        $__internal_c17510a7ae72b27cddab82a00825354fa3e6d33c5194953dbf1c075a6a1d7fb0->enter($__internal_c17510a7ae72b27cddab82a00825354fa3e6d33c5194953dbf1c075a6a1d7fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c17510a7ae72b27cddab82a00825354fa3e6d33c5194953dbf1c075a6a1d7fb0->leave($__internal_c17510a7ae72b27cddab82a00825354fa3e6d33c5194953dbf1c075a6a1d7fb0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4c10aa32a173a896bf912870c2d7f364dac9a938504e8999936f707675612e2 = $this->env->getExtension("native_profiler");
        $__internal_b4c10aa32a173a896bf912870c2d7f364dac9a938504e8999936f707675612e2->enter($__internal_b4c10aa32a173a896bf912870c2d7f364dac9a938504e8999936f707675612e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b4c10aa32a173a896bf912870c2d7f364dac9a938504e8999936f707675612e2->leave($__internal_b4c10aa32a173a896bf912870c2d7f364dac9a938504e8999936f707675612e2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_31e8babeeed7cc6bd6c80c3a635dc46f47ebf40b6a37ae309d06b58145e077ae = $this->env->getExtension("native_profiler");
        $__internal_31e8babeeed7cc6bd6c80c3a635dc46f47ebf40b6a37ae309d06b58145e077ae->enter($__internal_31e8babeeed7cc6bd6c80c3a635dc46f47ebf40b6a37ae309d06b58145e077ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_31e8babeeed7cc6bd6c80c3a635dc46f47ebf40b6a37ae309d06b58145e077ae->leave($__internal_31e8babeeed7cc6bd6c80c3a635dc46f47ebf40b6a37ae309d06b58145e077ae_prof);

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
