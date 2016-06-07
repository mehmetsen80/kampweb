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
        $__internal_7240e5cf4ab458e992e707f4cf9322e52fc4249855ed32e96d42671cdbc369b6 = $this->env->getExtension("native_profiler");
        $__internal_7240e5cf4ab458e992e707f4cf9322e52fc4249855ed32e96d42671cdbc369b6->enter($__internal_7240e5cf4ab458e992e707f4cf9322e52fc4249855ed32e96d42671cdbc369b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7240e5cf4ab458e992e707f4cf9322e52fc4249855ed32e96d42671cdbc369b6->leave($__internal_7240e5cf4ab458e992e707f4cf9322e52fc4249855ed32e96d42671cdbc369b6_prof);

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
