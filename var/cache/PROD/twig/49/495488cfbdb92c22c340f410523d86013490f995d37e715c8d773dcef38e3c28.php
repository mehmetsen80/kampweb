<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_2d212f0bec8313bf4c9d08765454629deec2bff1ab4de9ebab27a5c2beaeb8ea extends Twig_Template
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
        $__internal_ac4f201ff97de8e0b089d321b7a9dfb74e659114c40229f02d78c0213e5379a1 = $this->env->getExtension("native_profiler");
        $__internal_ac4f201ff97de8e0b089d321b7a9dfb74e659114c40229f02d78c0213e5379a1->enter($__internal_ac4f201ff97de8e0b089d321b7a9dfb74e659114c40229f02d78c0213e5379a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ac4f201ff97de8e0b089d321b7a9dfb74e659114c40229f02d78c0213e5379a1->leave($__internal_ac4f201ff97de8e0b089d321b7a9dfb74e659114c40229f02d78c0213e5379a1_prof);

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
