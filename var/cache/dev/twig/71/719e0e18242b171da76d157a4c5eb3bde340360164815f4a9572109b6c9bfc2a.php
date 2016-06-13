<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_5b3bed6db64974326b6313baee533adc58464c24d1c19d854f177929f6e0b5ad extends Twig_Template
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
        $__internal_eae0a14eac4db4c32acd6ab07f45b52b8ae39db25cc0ef908bfaa9da13da1f46 = $this->env->getExtension("native_profiler");
        $__internal_eae0a14eac4db4c32acd6ab07f45b52b8ae39db25cc0ef908bfaa9da13da1f46->enter($__internal_eae0a14eac4db4c32acd6ab07f45b52b8ae39db25cc0ef908bfaa9da13da1f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_eae0a14eac4db4c32acd6ab07f45b52b8ae39db25cc0ef908bfaa9da13da1f46->leave($__internal_eae0a14eac4db4c32acd6ab07f45b52b8ae39db25cc0ef908bfaa9da13da1f46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
