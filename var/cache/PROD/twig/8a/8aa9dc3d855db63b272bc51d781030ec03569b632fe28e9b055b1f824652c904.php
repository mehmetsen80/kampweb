<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c361721542e1e687d41594ea3d2baba79f3f14daa93196f98aad4493e4985f87 extends Twig_Template
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
        $__internal_f63f102d9f7c92d9d79c058e58947e2a889e2403c03f51e3e153215bd596143e = $this->env->getExtension("native_profiler");
        $__internal_f63f102d9f7c92d9d79c058e58947e2a889e2403c03f51e3e153215bd596143e->enter($__internal_f63f102d9f7c92d9d79c058e58947e2a889e2403c03f51e3e153215bd596143e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f63f102d9f7c92d9d79c058e58947e2a889e2403c03f51e3e153215bd596143e->leave($__internal_f63f102d9f7c92d9d79c058e58947e2a889e2403c03f51e3e153215bd596143e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
