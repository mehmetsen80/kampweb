<?php

/* :Security:changepassword.html.twig */
class __TwigTemplate_1a83e76016b0a133aeede3e051fa797e67f7fb189f896f3d90733f2f9d884429 extends Twig_Template
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
        $__internal_3315fceed90d35a10c1c6dc041931904fc4b75e15e2fcfb969305e22dbad9b04 = $this->env->getExtension("native_profiler");
        $__internal_3315fceed90d35a10c1c6dc041931904fc4b75e15e2fcfb969305e22dbad9b04->enter($__internal_3315fceed90d35a10c1c6dc041931904fc4b75e15e2fcfb969305e22dbad9b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Security:changepassword.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "oldPassword", array()), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "
<button type=\"submit\">Update!</button>
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_3315fceed90d35a10c1c6dc041931904fc4b75e15e2fcfb969305e22dbad9b04->leave($__internal_3315fceed90d35a10c1c6dc041931904fc4b75e15e2fcfb969305e22dbad9b04_prof);

    }

    public function getTemplateName()
    {
        return ":Security:changepassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  37 => 5,  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* */
/* {{ form_start(form) }}*/
/*     {{ form_row(form.oldPassword) }}*/
/*     {{ form_row(form.plainPassword.first) }}*/
/*     {{ form_row(form.plainPassword.second) }}*/
/* <button type="submit">Update!</button>*/
/* {{ form_end(form) }}*/
