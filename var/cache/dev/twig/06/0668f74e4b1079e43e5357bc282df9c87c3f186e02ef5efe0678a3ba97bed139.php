<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_55300e0541fabfdd2d664c6a903d511ac254aa2156897db73fdb0ab81660a104 extends Twig_Template
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
        $__internal_6262f2efc628fdc42bd648e7c26a805d1a3163185134ff2b71324eb9f7221365 = $this->env->getExtension("native_profiler");
        $__internal_6262f2efc628fdc42bd648e7c26a805d1a3163185134ff2b71324eb9f7221365->enter($__internal_6262f2efc628fdc42bd648e7c26a805d1a3163185134ff2b71324eb9f7221365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6262f2efc628fdc42bd648e7c26a805d1a3163185134ff2b71324eb9f7221365->leave($__internal_6262f2efc628fdc42bd648e7c26a805d1a3163185134ff2b71324eb9f7221365_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
