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
        $__internal_276c78c6603f97baf36cf4cffe7f1578ee6e3363a4ae70edfc5b40b69ee9197e = $this->env->getExtension("native_profiler");
        $__internal_276c78c6603f97baf36cf4cffe7f1578ee6e3363a4ae70edfc5b40b69ee9197e->enter($__internal_276c78c6603f97baf36cf4cffe7f1578ee6e3363a4ae70edfc5b40b69ee9197e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_276c78c6603f97baf36cf4cffe7f1578ee6e3363a4ae70edfc5b40b69ee9197e->leave($__internal_276c78c6603f97baf36cf4cffe7f1578ee6e3363a4ae70edfc5b40b69ee9197e_prof);

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
