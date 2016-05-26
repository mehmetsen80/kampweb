<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ed9ea1b68cd085ef93ab708514634575d537be2d006a1a205b5a872f98d8dab2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_701c570e0aa480e18aab8b14cb97ee7f1e6106c308a827cf98fb43160b10b21d = $this->env->getExtension("native_profiler");
        $__internal_701c570e0aa480e18aab8b14cb97ee7f1e6106c308a827cf98fb43160b10b21d->enter($__internal_701c570e0aa480e18aab8b14cb97ee7f1e6106c308a827cf98fb43160b10b21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_701c570e0aa480e18aab8b14cb97ee7f1e6106c308a827cf98fb43160b10b21d->leave($__internal_701c570e0aa480e18aab8b14cb97ee7f1e6106c308a827cf98fb43160b10b21d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e92781c68b4f8cda38284d82a2137aa3feb54e830af93b0f8b0d836f6063def8 = $this->env->getExtension("native_profiler");
        $__internal_e92781c68b4f8cda38284d82a2137aa3feb54e830af93b0f8b0d836f6063def8->enter($__internal_e92781c68b4f8cda38284d82a2137aa3feb54e830af93b0f8b0d836f6063def8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e92781c68b4f8cda38284d82a2137aa3feb54e830af93b0f8b0d836f6063def8->leave($__internal_e92781c68b4f8cda38284d82a2137aa3feb54e830af93b0f8b0d836f6063def8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_48b203a54f81c2e342e61a09cbbacacce17e55fee5aa7b5a20a930780210e6a0 = $this->env->getExtension("native_profiler");
        $__internal_48b203a54f81c2e342e61a09cbbacacce17e55fee5aa7b5a20a930780210e6a0->enter($__internal_48b203a54f81c2e342e61a09cbbacacce17e55fee5aa7b5a20a930780210e6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_48b203a54f81c2e342e61a09cbbacacce17e55fee5aa7b5a20a930780210e6a0->leave($__internal_48b203a54f81c2e342e61a09cbbacacce17e55fee5aa7b5a20a930780210e6a0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebf6966929b51f39f8535a2c090f81ffbfe5a8202e6a595235487048ac687f25 = $this->env->getExtension("native_profiler");
        $__internal_ebf6966929b51f39f8535a2c090f81ffbfe5a8202e6a595235487048ac687f25->enter($__internal_ebf6966929b51f39f8535a2c090f81ffbfe5a8202e6a595235487048ac687f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ebf6966929b51f39f8535a2c090f81ffbfe5a8202e6a595235487048ac687f25->leave($__internal_ebf6966929b51f39f8535a2c090f81ffbfe5a8202e6a595235487048ac687f25_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
