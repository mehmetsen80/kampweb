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
        $__internal_4cead9bb9016cebfa770acd2493edfabccb3c3ebd5cc1081f22ca3cf5e807f54 = $this->env->getExtension("native_profiler");
        $__internal_4cead9bb9016cebfa770acd2493edfabccb3c3ebd5cc1081f22ca3cf5e807f54->enter($__internal_4cead9bb9016cebfa770acd2493edfabccb3c3ebd5cc1081f22ca3cf5e807f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":person:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cead9bb9016cebfa770acd2493edfabccb3c3ebd5cc1081f22ca3cf5e807f54->leave($__internal_4cead9bb9016cebfa770acd2493edfabccb3c3ebd5cc1081f22ca3cf5e807f54_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b37dd1d6d132a9d51cd29f8842797de8715e2f8a0bc703b50b919f0c06bf7bc = $this->env->getExtension("native_profiler");
        $__internal_0b37dd1d6d132a9d51cd29f8842797de8715e2f8a0bc703b50b919f0c06bf7bc->enter($__internal_0b37dd1d6d132a9d51cd29f8842797de8715e2f8a0bc703b50b919f0c06bf7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Welcome to Kamp App ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "  ";
        
        $__internal_0b37dd1d6d132a9d51cd29f8842797de8715e2f8a0bc703b50b919f0c06bf7bc->leave($__internal_0b37dd1d6d132a9d51cd29f8842797de8715e2f8a0bc703b50b919f0c06bf7bc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4ede5bb141b2dfcfc72c6a72382370cb651145a0441a7892e2617346f63dfc1 = $this->env->getExtension("native_profiler");
        $__internal_c4ede5bb141b2dfcfc72c6a72382370cb651145a0441a7892e2617346f63dfc1->enter($__internal_c4ede5bb141b2dfcfc72c6a72382370cb651145a0441a7892e2617346f63dfc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c4ede5bb141b2dfcfc72c6a72382370cb651145a0441a7892e2617346f63dfc1->leave($__internal_c4ede5bb141b2dfcfc72c6a72382370cb651145a0441a7892e2617346f63dfc1_prof);

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
