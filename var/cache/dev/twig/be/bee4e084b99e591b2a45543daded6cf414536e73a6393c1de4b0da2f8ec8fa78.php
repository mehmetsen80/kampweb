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
        $__internal_134c9666ff3aba134d9553218f0ab86b3646fba2630627461fc4bcca6419c340 = $this->env->getExtension("native_profiler");
        $__internal_134c9666ff3aba134d9553218f0ab86b3646fba2630627461fc4bcca6419c340->enter($__internal_134c9666ff3aba134d9553218f0ab86b3646fba2630627461fc4bcca6419c340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_134c9666ff3aba134d9553218f0ab86b3646fba2630627461fc4bcca6419c340->leave($__internal_134c9666ff3aba134d9553218f0ab86b3646fba2630627461fc4bcca6419c340_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_103a28633d0bd6bbe5689e6ab4140edfdf45069564e3b447b7d194efde9d8629 = $this->env->getExtension("native_profiler");
        $__internal_103a28633d0bd6bbe5689e6ab4140edfdf45069564e3b447b7d194efde9d8629->enter($__internal_103a28633d0bd6bbe5689e6ab4140edfdf45069564e3b447b7d194efde9d8629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_103a28633d0bd6bbe5689e6ab4140edfdf45069564e3b447b7d194efde9d8629->leave($__internal_103a28633d0bd6bbe5689e6ab4140edfdf45069564e3b447b7d194efde9d8629_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_448e204c06b7b5adb14c699a65d038c0724b481c41bf67d2cadc248c3d7590a1 = $this->env->getExtension("native_profiler");
        $__internal_448e204c06b7b5adb14c699a65d038c0724b481c41bf67d2cadc248c3d7590a1->enter($__internal_448e204c06b7b5adb14c699a65d038c0724b481c41bf67d2cadc248c3d7590a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_448e204c06b7b5adb14c699a65d038c0724b481c41bf67d2cadc248c3d7590a1->leave($__internal_448e204c06b7b5adb14c699a65d038c0724b481c41bf67d2cadc248c3d7590a1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_edd8aa50673f565a32dbf70142947dfc78c65bbaef64a734e5f343c1c9ff312d = $this->env->getExtension("native_profiler");
        $__internal_edd8aa50673f565a32dbf70142947dfc78c65bbaef64a734e5f343c1c9ff312d->enter($__internal_edd8aa50673f565a32dbf70142947dfc78c65bbaef64a734e5f343c1c9ff312d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_edd8aa50673f565a32dbf70142947dfc78c65bbaef64a734e5f343c1c9ff312d->leave($__internal_edd8aa50673f565a32dbf70142947dfc78c65bbaef64a734e5f343c1c9ff312d_prof);

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
