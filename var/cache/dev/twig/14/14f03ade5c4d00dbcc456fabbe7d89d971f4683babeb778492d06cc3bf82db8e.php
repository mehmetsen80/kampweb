<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e9e6c7c266766154ec6196bc088db2f8536b2b51b8f68d016c8d9effbadd726f extends Twig_Template
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
        $__internal_5cf822b9f19600f852bd3867060921418e5f360c88364722b02d40eecdc54d3c = $this->env->getExtension("native_profiler");
        $__internal_5cf822b9f19600f852bd3867060921418e5f360c88364722b02d40eecdc54d3c->enter($__internal_5cf822b9f19600f852bd3867060921418e5f360c88364722b02d40eecdc54d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5cf822b9f19600f852bd3867060921418e5f360c88364722b02d40eecdc54d3c->leave($__internal_5cf822b9f19600f852bd3867060921418e5f360c88364722b02d40eecdc54d3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
