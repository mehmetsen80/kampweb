<?php

/* :person:show.html.twig */
class __TwigTemplate_1e847b0f65871cd045ef473d8d7cfcb680ef42eb30a706d261884506506ff526 extends Twig_Template
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
        $__internal_09823c95b2a8b1af4429b18b874f2f69270faa16fefd48fee488a4ee263dd94b = $this->env->getExtension("native_profiler");
        $__internal_09823c95b2a8b1af4429b18b874f2f69270faa16fefd48fee488a4ee263dd94b->enter($__internal_09823c95b2a8b1af4429b18b874f2f69270faa16fefd48fee488a4ee263dd94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":person:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09823c95b2a8b1af4429b18b874f2f69270faa16fefd48fee488a4ee263dd94b->leave($__internal_09823c95b2a8b1af4429b18b874f2f69270faa16fefd48fee488a4ee263dd94b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a98f61ae7726494f8778dd22fe59fef1f49fb34d4dfd86a105651a594d40b697 = $this->env->getExtension("native_profiler");
        $__internal_a98f61ae7726494f8778dd22fe59fef1f49fb34d4dfd86a105651a594d40b697->enter($__internal_a98f61ae7726494f8778dd22fe59fef1f49fb34d4dfd86a105651a594d40b697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Welcome to Kamp App ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "  ";
        
        $__internal_a98f61ae7726494f8778dd22fe59fef1f49fb34d4dfd86a105651a594d40b697->leave($__internal_a98f61ae7726494f8778dd22fe59fef1f49fb34d4dfd86a105651a594d40b697_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4ebb8a94d62f583038b5069a59cf08fb1e364a5df8bd6024e5de9bed01e819e = $this->env->getExtension("native_profiler");
        $__internal_c4ebb8a94d62f583038b5069a59cf08fb1e364a5df8bd6024e5de9bed01e819e->enter($__internal_c4ebb8a94d62f583038b5069a59cf08fb1e364a5df8bd6024e5de9bed01e819e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c4ebb8a94d62f583038b5069a59cf08fb1e364a5df8bd6024e5de9bed01e819e->leave($__internal_c4ebb8a94d62f583038b5069a59cf08fb1e364a5df8bd6024e5de9bed01e819e_prof);

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
