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
        $__internal_d1d610f71a1866a6b10607a03b47a9fc1c52166d0f1736c905ba664dd137f363 = $this->env->getExtension("native_profiler");
        $__internal_d1d610f71a1866a6b10607a03b47a9fc1c52166d0f1736c905ba664dd137f363->enter($__internal_d1d610f71a1866a6b10607a03b47a9fc1c52166d0f1736c905ba664dd137f363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1d610f71a1866a6b10607a03b47a9fc1c52166d0f1736c905ba664dd137f363->leave($__internal_d1d610f71a1866a6b10607a03b47a9fc1c52166d0f1736c905ba664dd137f363_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb822c6c2026a696fa0664fd9b471c9bd114fd2d69ef571a5de833124b148a7e = $this->env->getExtension("native_profiler");
        $__internal_cb822c6c2026a696fa0664fd9b471c9bd114fd2d69ef571a5de833124b148a7e->enter($__internal_cb822c6c2026a696fa0664fd9b471c9bd114fd2d69ef571a5de833124b148a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cb822c6c2026a696fa0664fd9b471c9bd114fd2d69ef571a5de833124b148a7e->leave($__internal_cb822c6c2026a696fa0664fd9b471c9bd114fd2d69ef571a5de833124b148a7e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ede2f79a94fa3a71525a84f35b4e01adce96650beb90e9836100c713feb7655a = $this->env->getExtension("native_profiler");
        $__internal_ede2f79a94fa3a71525a84f35b4e01adce96650beb90e9836100c713feb7655a->enter($__internal_ede2f79a94fa3a71525a84f35b4e01adce96650beb90e9836100c713feb7655a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ede2f79a94fa3a71525a84f35b4e01adce96650beb90e9836100c713feb7655a->leave($__internal_ede2f79a94fa3a71525a84f35b4e01adce96650beb90e9836100c713feb7655a_prof);

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
