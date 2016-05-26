<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_87b938fc55dca1f20ed544a2e58cc8076cb05f509dd48c2b940cde35378adf8a extends Twig_Template
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
        $__internal_0fae8d2025190be74e4c54b1966502f52d30e113f2c1ab140d40549614f101a9 = $this->env->getExtension("native_profiler");
        $__internal_0fae8d2025190be74e4c54b1966502f52d30e113f2c1ab140d40549614f101a9->enter($__internal_0fae8d2025190be74e4c54b1966502f52d30e113f2c1ab140d40549614f101a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0fae8d2025190be74e4c54b1966502f52d30e113f2c1ab140d40549614f101a9->leave($__internal_0fae8d2025190be74e4c54b1966502f52d30e113f2c1ab140d40549614f101a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
