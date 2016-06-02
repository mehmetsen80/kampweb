<?php

/* :user:show.html.twig */
class __TwigTemplate_dbb9f1fd941df028bf6f4eacad6f5eb617cbf942a099c3deedcfdd68ea3b8768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::default.html.twig", ":user:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9d1e45be052a03f39e684ceecd6d88717446fd9dbe508fd34bcd24876b7d458 = $this->env->getExtension("native_profiler");
        $__internal_d9d1e45be052a03f39e684ceecd6d88717446fd9dbe508fd34bcd24876b7d458->enter($__internal_d9d1e45be052a03f39e684ceecd6d88717446fd9dbe508fd34bcd24876b7d458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9d1e45be052a03f39e684ceecd6d88717446fd9dbe508fd34bcd24876b7d458->leave($__internal_d9d1e45be052a03f39e684ceecd6d88717446fd9dbe508fd34bcd24876b7d458_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_53f5be41354e2f066cfddfb1d9d3a40162de0a6697d8f0300fa9df2988318125 = $this->env->getExtension("native_profiler");
        $__internal_53f5be41354e2f066cfddfb1d9d3a40162de0a6697d8f0300fa9df2988318125->enter($__internal_53f5be41354e2f066cfddfb1d9d3a40162de0a6697d8f0300fa9df2988318125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- Start: CONTENT WRAPPER -->
<section id=\"content_wrapper\">
    <!-- Start: TOPBAR -->
    <header id=\"topbar\">
        <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
                <li class=\"crumb-active\">
                    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">Dashboard</a>
                </li>
                <li class=\"crumb-icon\">
                    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">
                        <span class=\"glyphicon glyphicon-home\"></span>
                    </a>
                </li>
            </ol>
        </div>
    </header>
    <!-- End: TOPBAR -->

    <!-- Begin: CONTENT -->
    <section id=\"content\" >
        <div class=\"panel\">
            <div class=\"panel-heading\">
                <span class=\"panel-title\">Panel title</span>
            </div>
            <div class=\"panel-body\">
        <h2 class=\"form-signin-heading\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullname", array()), "html", null, true);
        echo "</h2>
        <dl class=\"genus-details-list\">
            <dt>Information:</dt>
            <dd>We can fetch notes from the database about the user. </dd>
            <dt>Email: </dt>
            <dd>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</dd>
            <dt>Is user active?</dt>
            <dd>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "isactive", array()), "html", null, true);
        echo "</dd>
            <dt>User Role</dt>
            <dd>";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 40
            echo "                    ";
            echo twig_escape_filter($this->env, $context["role"], "html", null, true);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </dd>
            <dt>User Registration Date:</dt>
            <dd>";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "createdat", array()), "Y-m-d"), "html", null, true);
        echo "</dd>
            <dt>Last Updated Date:</dt>
            <dd>";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "modifiedat", array()), "Y-m-d"), "html", null, true);
        echo "</dd>

        </dl>
    </div>
        </div>
        </div>
    </section>
    <!-- End: CONTENT-->
</section>
";
        
        $__internal_53f5be41354e2f066cfddfb1d9d3a40162de0a6697d8f0300fa9df2988318125->leave($__internal_53f5be41354e2f066cfddfb1d9d3a40162de0a6697d8f0300fa9df2988318125_prof);

    }

    public function getTemplateName()
    {
        return ":user:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 46,  109 => 44,  105 => 42,  96 => 40,  92 => 39,  87 => 37,  82 => 35,  74 => 30,  55 => 14,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::default.html.twig' %}*/
/* */
/* {% block body %}*/
/* <!-- Start: CONTENT WRAPPER -->*/
/* <section id="content_wrapper">*/
/*     <!-- Start: TOPBAR -->*/
/*     <header id="topbar">*/
/*         <div class="topbar-left">*/
/*             <ol class="breadcrumb">*/
/*                 <li class="crumb-active">*/
/*                     <a href="{{ path('dashboard') }}">Dashboard</a>*/
/*                 </li>*/
/*                 <li class="crumb-icon">*/
/*                     <a href="{{ path('dashboard') }}">*/
/*                         <span class="glyphicon glyphicon-home"></span>*/
/*                     </a>*/
/*                 </li>*/
/*             </ol>*/
/*         </div>*/
/*     </header>*/
/*     <!-- End: TOPBAR -->*/
/* */
/*     <!-- Begin: CONTENT -->*/
/*     <section id="content" >*/
/*         <div class="panel">*/
/*             <div class="panel-heading">*/
/*                 <span class="panel-title">Panel title</span>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*         <h2 class="form-signin-heading">{{ user.fullname }}</h2>*/
/*         <dl class="genus-details-list">*/
/*             <dt>Information:</dt>*/
/*             <dd>We can fetch notes from the database about the user. </dd>*/
/*             <dt>Email: </dt>*/
/*             <dd>{{ user.username }}</dd>*/
/*             <dt>Is user active?</dt>*/
/*             <dd>{{ user.isactive }}</dd>*/
/*             <dt>User Role</dt>*/
/*             <dd>{% for role in user.roles %}*/
/*                     {{ role }}*/
/*                 {% endfor %}*/
/*             </dd>*/
/*             <dt>User Registration Date:</dt>*/
/*             <dd>{{ user.createdat|date('Y-m-d') }}</dd>*/
/*             <dt>Last Updated Date:</dt>*/
/*             <dd>{{ user.modifiedat|date('Y-m-d') }}</dd>*/
/* */
/*         </dl>*/
/*     </div>*/
/*         </div>*/
/*         </div>*/
/*     </section>*/
/*     <!-- End: CONTENT-->*/
/* </section>*/
/* {% endblock %}*/
/* */
/* */
