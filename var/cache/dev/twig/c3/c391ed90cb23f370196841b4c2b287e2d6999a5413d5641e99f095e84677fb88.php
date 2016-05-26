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
        $__internal_50536bbadacbdbffac9fc8dc5134464be8546a969fdf1a9e296c08c08ec5ee6b = $this->env->getExtension("native_profiler");
        $__internal_50536bbadacbdbffac9fc8dc5134464be8546a969fdf1a9e296c08c08ec5ee6b->enter($__internal_50536bbadacbdbffac9fc8dc5134464be8546a969fdf1a9e296c08c08ec5ee6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50536bbadacbdbffac9fc8dc5134464be8546a969fdf1a9e296c08c08ec5ee6b->leave($__internal_50536bbadacbdbffac9fc8dc5134464be8546a969fdf1a9e296c08c08ec5ee6b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e1acce968f914003f52727bfadc1af9146a253c37e1786b262cc4cab5176260 = $this->env->getExtension("native_profiler");
        $__internal_6e1acce968f914003f52727bfadc1af9146a253c37e1786b262cc4cab5176260->enter($__internal_6e1acce968f914003f52727bfadc1af9146a253c37e1786b262cc4cab5176260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6e1acce968f914003f52727bfadc1af9146a253c37e1786b262cc4cab5176260->leave($__internal_6e1acce968f914003f52727bfadc1af9146a253c37e1786b262cc4cab5176260_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_552386f7f1c901f85c8c57e947114b201e527e68daeb5e28fc4c7f58888f68cd = $this->env->getExtension("native_profiler");
        $__internal_552386f7f1c901f85c8c57e947114b201e527e68daeb5e28fc4c7f58888f68cd->enter($__internal_552386f7f1c901f85c8c57e947114b201e527e68daeb5e28fc4c7f58888f68cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_552386f7f1c901f85c8c57e947114b201e527e68daeb5e28fc4c7f58888f68cd->leave($__internal_552386f7f1c901f85c8c57e947114b201e527e68daeb5e28fc4c7f58888f68cd_prof);

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
