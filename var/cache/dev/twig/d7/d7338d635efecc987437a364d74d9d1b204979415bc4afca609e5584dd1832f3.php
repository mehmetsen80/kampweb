<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_16b1d9009a9cd309e5f314c97f2bdca8ca39fa572032b45db38543efded39568 extends Twig_Template
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
        $__internal_1b253e76cc712f83d17447574956e060a306dc00c45cb99fdc2d29be75694cf0 = $this->env->getExtension("native_profiler");
        $__internal_1b253e76cc712f83d17447574956e060a306dc00c45cb99fdc2d29be75694cf0->enter($__internal_1b253e76cc712f83d17447574956e060a306dc00c45cb99fdc2d29be75694cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1b253e76cc712f83d17447574956e060a306dc00c45cb99fdc2d29be75694cf0->leave($__internal_1b253e76cc712f83d17447574956e060a306dc00c45cb99fdc2d29be75694cf0_prof);

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
