<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_94a837269b62465ed9a8c2101f7d5d8e331ab82cb869da03b7ed1145848809f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_ffbd4336a5e038efed9d69ec6e81bd3c599f2a1d67ff02b719ccfb9fd954a251 = $this->env->getExtension("native_profiler");
        $__internal_ffbd4336a5e038efed9d69ec6e81bd3c599f2a1d67ff02b719ccfb9fd954a251->enter($__internal_ffbd4336a5e038efed9d69ec6e81bd3c599f2a1d67ff02b719ccfb9fd954a251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffbd4336a5e038efed9d69ec6e81bd3c599f2a1d67ff02b719ccfb9fd954a251->leave($__internal_ffbd4336a5e038efed9d69ec6e81bd3c599f2a1d67ff02b719ccfb9fd954a251_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a7a2b6c89106d1ba570190c31307fec7ce96c3e7cfa65f5f7d50697a21c777d = $this->env->getExtension("native_profiler");
        $__internal_0a7a2b6c89106d1ba570190c31307fec7ce96c3e7cfa65f5f7d50697a21c777d->enter($__internal_0a7a2b6c89106d1ba570190c31307fec7ce96c3e7cfa65f5f7d50697a21c777d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0a7a2b6c89106d1ba570190c31307fec7ce96c3e7cfa65f5f7d50697a21c777d->leave($__internal_0a7a2b6c89106d1ba570190c31307fec7ce96c3e7cfa65f5f7d50697a21c777d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7511bd33e654b0e38231a9dd1ca03e00c5afebf1b9f8b2dd87b392c21410ae65 = $this->env->getExtension("native_profiler");
        $__internal_7511bd33e654b0e38231a9dd1ca03e00c5afebf1b9f8b2dd87b392c21410ae65->enter($__internal_7511bd33e654b0e38231a9dd1ca03e00c5afebf1b9f8b2dd87b392c21410ae65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7511bd33e654b0e38231a9dd1ca03e00c5afebf1b9f8b2dd87b392c21410ae65->leave($__internal_7511bd33e654b0e38231a9dd1ca03e00c5afebf1b9f8b2dd87b392c21410ae65_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_29a8f04a53259afe7f5d6e7d06dd30a23ebdf11ae99af71ee83490dfb40d2098 = $this->env->getExtension("native_profiler");
        $__internal_29a8f04a53259afe7f5d6e7d06dd30a23ebdf11ae99af71ee83490dfb40d2098->enter($__internal_29a8f04a53259afe7f5d6e7d06dd30a23ebdf11ae99af71ee83490dfb40d2098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_29a8f04a53259afe7f5d6e7d06dd30a23ebdf11ae99af71ee83490dfb40d2098->leave($__internal_29a8f04a53259afe7f5d6e7d06dd30a23ebdf11ae99af71ee83490dfb40d2098_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
