<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_758e1da228dfb98c05edd3093fd39a9e398b63f6b405c3a82e7f83ea2270d1b0 extends Twig_Template
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
        $__internal_5f8b78b61b67dfec14d1f523a7fbacbb8d36ac3ae0b9265eb07469f4b00fd382 = $this->env->getExtension("native_profiler");
        $__internal_5f8b78b61b67dfec14d1f523a7fbacbb8d36ac3ae0b9265eb07469f4b00fd382->enter($__internal_5f8b78b61b67dfec14d1f523a7fbacbb8d36ac3ae0b9265eb07469f4b00fd382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5f8b78b61b67dfec14d1f523a7fbacbb8d36ac3ae0b9265eb07469f4b00fd382->leave($__internal_5f8b78b61b67dfec14d1f523a7fbacbb8d36ac3ae0b9265eb07469f4b00fd382_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
