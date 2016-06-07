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
        $__internal_bffba437a6ffcc48337bf1577eae031c67d610c0e651ace1b99d017c318875e1 = $this->env->getExtension("native_profiler");
        $__internal_bffba437a6ffcc48337bf1577eae031c67d610c0e651ace1b99d017c318875e1->enter($__internal_bffba437a6ffcc48337bf1577eae031c67d610c0e651ace1b99d017c318875e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bffba437a6ffcc48337bf1577eae031c67d610c0e651ace1b99d017c318875e1->leave($__internal_bffba437a6ffcc48337bf1577eae031c67d610c0e651ace1b99d017c318875e1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_76609a73b4a15ec2e56338fabe31e2856cf7d07cc44cf9991b7e9523060e3c68 = $this->env->getExtension("native_profiler");
        $__internal_76609a73b4a15ec2e56338fabe31e2856cf7d07cc44cf9991b7e9523060e3c68->enter($__internal_76609a73b4a15ec2e56338fabe31e2856cf7d07cc44cf9991b7e9523060e3c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_76609a73b4a15ec2e56338fabe31e2856cf7d07cc44cf9991b7e9523060e3c68->leave($__internal_76609a73b4a15ec2e56338fabe31e2856cf7d07cc44cf9991b7e9523060e3c68_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fb980894d5031ee581b7ac49410e9be9eea558c2d5cb53bf065cf1c538d66d7 = $this->env->getExtension("native_profiler");
        $__internal_8fb980894d5031ee581b7ac49410e9be9eea558c2d5cb53bf065cf1c538d66d7->enter($__internal_8fb980894d5031ee581b7ac49410e9be9eea558c2d5cb53bf065cf1c538d66d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8fb980894d5031ee581b7ac49410e9be9eea558c2d5cb53bf065cf1c538d66d7->leave($__internal_8fb980894d5031ee581b7ac49410e9be9eea558c2d5cb53bf065cf1c538d66d7_prof);

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
