<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_20a4563c7ca089e14ebb04e7439e582a47afd9da344cd36ddd8cfc70df7fee40 extends Twig_Template
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
        $__internal_5e5ba96c84cc7afeb06ed7aafc99a7114115e0686ed9512728c1fa0248e75db5 = $this->env->getExtension("native_profiler");
        $__internal_5e5ba96c84cc7afeb06ed7aafc99a7114115e0686ed9512728c1fa0248e75db5->enter($__internal_5e5ba96c84cc7afeb06ed7aafc99a7114115e0686ed9512728c1fa0248e75db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_5e5ba96c84cc7afeb06ed7aafc99a7114115e0686ed9512728c1fa0248e75db5->leave($__internal_5e5ba96c84cc7afeb06ed7aafc99a7114115e0686ed9512728c1fa0248e75db5_prof);

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
