<?php

/* :emails:registration.html.twig */
class __TwigTemplate_6beeefdcdad3b244565f34cd0824fb4f078878539fd9c75c6cac79461791d675 extends Twig_Template
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
        $__internal_3e1fa6094ffb53f8192b1a06f65c9fdef3cf187cd93772b8460ef31c6e8e4ad8 = $this->env->getExtension("native_profiler");
        $__internal_3e1fa6094ffb53f8192b1a06f65c9fdef3cf187cd93772b8460ef31c6e8e4ad8->enter($__internal_3e1fa6094ffb53f8192b1a06f65c9fdef3cf187cd93772b8460ef31c6e8e4ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":emails:registration.html.twig"));

        // line 2
        echo "<h3>You did it! You registered!</h3>

";
        // line 5
        echo "You are already logged in, please visit <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "\">your dashboard</a>.

Thanks!

";
        // line 10
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("img/logo.png")), "html", null, true);
        echo "\">
";
        
        $__internal_3e1fa6094ffb53f8192b1a06f65c9fdef3cf187cd93772b8460ef31c6e8e4ad8->leave($__internal_3e1fa6094ffb53f8192b1a06f65c9fdef3cf187cd93772b8460ef31c6e8e4ad8_prof);

    }

    public function getTemplateName()
    {
        return ":emails:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 10,  26 => 5,  22 => 2,);
    }
}
/* {# app/Resources/views/Emails/registration.html.twig #}*/
/* <h3>You did it! You registered!</h3>*/
/* */
/* {# example, assuming you have a route named "login" #}*/
/* You are already logged in, please visit <a href="{{ url('homepage') }}">your dashboard</a>.*/
/* */
/* Thanks!*/
/* */
/* {# Makes an absolute URL to the /images/logo.png file #}*/
/* <img src="{{ absolute_url(asset('img/logo.png')) }}">*/
/* */
