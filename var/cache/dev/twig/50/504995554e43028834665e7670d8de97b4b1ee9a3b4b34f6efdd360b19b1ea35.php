<?php

/* :person:show.html.twig */
class __TwigTemplate_18b74708740cdb02ee30b635d7959867681c2ade4b7ce4662bedba8689090a88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("security.html.twig", ":person:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "security.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f827c84767bbb63ce3a9efa5ce4602dcf817d3578445c96b2b20793dd156dd6 = $this->env->getExtension("native_profiler");
        $__internal_2f827c84767bbb63ce3a9efa5ce4602dcf817d3578445c96b2b20793dd156dd6->enter($__internal_2f827c84767bbb63ce3a9efa5ce4602dcf817d3578445c96b2b20793dd156dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":person:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f827c84767bbb63ce3a9efa5ce4602dcf817d3578445c96b2b20793dd156dd6->leave($__internal_2f827c84767bbb63ce3a9efa5ce4602dcf817d3578445c96b2b20793dd156dd6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3dd6958db5214581440eb3490cda5480f6009afa7722e9942832c04f6355c260 = $this->env->getExtension("native_profiler");
        $__internal_3dd6958db5214581440eb3490cda5480f6009afa7722e9942832c04f6355c260->enter($__internal_3dd6958db5214581440eb3490cda5480f6009afa7722e9942832c04f6355c260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Welcome to Kamp App ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "  ";
        
        $__internal_3dd6958db5214581440eb3490cda5480f6009afa7722e9942832c04f6355c260->leave($__internal_3dd6958db5214581440eb3490cda5480f6009afa7722e9942832c04f6355c260_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6623baec7ccc988d7b9f0c039b61bf1f5720f749967c3553fbaaf1facf768e2d = $this->env->getExtension("native_profiler");
        $__internal_6623baec7ccc988d7b9f0c039b61bf1f5720f749967c3553fbaaf1facf768e2d->enter($__internal_6623baec7ccc988d7b9f0c039b61bf1f5720f749967c3553fbaaf1facf768e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Person</h1>

<h2>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</h2>

<ul>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) ? $context["notes"] : $this->getContext($context, "notes")));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 12
            echo "            <li>";
            echo twig_escape_filter($this->env, $context["note"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>
";
        
        $__internal_6623baec7ccc988d7b9f0c039b61bf1f5720f749967c3553fbaaf1facf768e2d->leave($__internal_6623baec7ccc988d7b9f0c039b61bf1f5720f749967c3553fbaaf1facf768e2d_prof);

    }

    public function getTemplateName()
    {
        return ":person:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 14,  69 => 12,  65 => 11,  59 => 8,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'security.html.twig' %}*/
/* */
/* {% block title %} Welcome to Kamp App {{ name }}  {% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Person</h1>*/
/* */
/* <h2>{{ name }}</h2>*/
/* */
/* <ul>*/
/*         {% for note in notes %}*/
/*             <li>{{ note }}</li>*/
/*         {% endfor %}*/
/* </ul>*/
/* {% endblock %}*/
