<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_9dc88631ab189ef384d4250542df56d7c53536b88ad47cbd0cee4623b2cadd15 extends Twig_Template
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
        $__internal_bdd994bcc5ec694151c48b6453ef2b93d59910eea897f255315370dd8d9b0829 = $this->env->getExtension("native_profiler");
        $__internal_bdd994bcc5ec694151c48b6453ef2b93d59910eea897f255315370dd8d9b0829->enter($__internal_bdd994bcc5ec694151c48b6453ef2b93d59910eea897f255315370dd8d9b0829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_bdd994bcc5ec694151c48b6453ef2b93d59910eea897f255315370dd8d9b0829->leave($__internal_bdd994bcc5ec694151c48b6453ef2b93d59910eea897f255315370dd8d9b0829_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
