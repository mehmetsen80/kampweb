<?php

/* :user:updateinfo.html.twig */
class __TwigTemplate_ba36f2dea09c24a7da873ff09b3f978b7e3414171bc44f2a1bf3fa9afaf9ffb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8ba73df46a14e330efbf6063cc3e3f8cb0f9dc1338eb45b84b2083e725aaaef = $this->env->getExtension("native_profiler");
        $__internal_e8ba73df46a14e330efbf6063cc3e3f8cb0f9dc1338eb45b84b2083e725aaaef->enter($__internal_e8ba73df46a14e330efbf6063cc3e3f8cb0f9dc1338eb45b84b2083e725aaaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:updateinfo.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newfullname", array()), 'row');
        echo "
";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newusername", array()), 'row');
        echo "
<button type=\"submit\">Update!</button>
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_e8ba73df46a14e330efbf6063cc3e3f8cb0f9dc1338eb45b84b2083e725aaaef->leave($__internal_e8ba73df46a14e330efbf6063cc3e3f8cb0f9dc1338eb45b84b2083e725aaaef_prof);

    }

    public function getTemplateName()
    {
        return ":user:updateinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  30 => 3,  26 => 2,  22 => 1,);
    }
}
/* {{ form_start(form) }}*/
/* {{ form_row(form.newfullname) }}*/
/* {{ form_row(form.newusername) }}*/
/* <button type="submit">Update!</button>*/
/* {{ form_end(form) }}*/
