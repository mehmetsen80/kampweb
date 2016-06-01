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
        $__internal_cd787568ff2ca211d50818a9050638fec7fcaffff321829acf00f68cfd5ddafd = $this->env->getExtension("native_profiler");
        $__internal_cd787568ff2ca211d50818a9050638fec7fcaffff321829acf00f68cfd5ddafd->enter($__internal_cd787568ff2ca211d50818a9050638fec7fcaffff321829acf00f68cfd5ddafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd787568ff2ca211d50818a9050638fec7fcaffff321829acf00f68cfd5ddafd->leave($__internal_cd787568ff2ca211d50818a9050638fec7fcaffff321829acf00f68cfd5ddafd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_99ba5743a2f108cc8d3b0b8de9a6a2613848ec0d367b3a5b8d89ee570aa79257 = $this->env->getExtension("native_profiler");
        $__internal_99ba5743a2f108cc8d3b0b8de9a6a2613848ec0d367b3a5b8d89ee570aa79257->enter($__internal_99ba5743a2f108cc8d3b0b8de9a6a2613848ec0d367b3a5b8d89ee570aa79257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_99ba5743a2f108cc8d3b0b8de9a6a2613848ec0d367b3a5b8d89ee570aa79257->leave($__internal_99ba5743a2f108cc8d3b0b8de9a6a2613848ec0d367b3a5b8d89ee570aa79257_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_19bc83cee867d89ef6a4999c4075902b58856759897ccdd48783d236aae8378f = $this->env->getExtension("native_profiler");
        $__internal_19bc83cee867d89ef6a4999c4075902b58856759897ccdd48783d236aae8378f->enter($__internal_19bc83cee867d89ef6a4999c4075902b58856759897ccdd48783d236aae8378f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_19bc83cee867d89ef6a4999c4075902b58856759897ccdd48783d236aae8378f->leave($__internal_19bc83cee867d89ef6a4999c4075902b58856759897ccdd48783d236aae8378f_prof);

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
