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
        $__internal_c13b114759c3146c10bb37ae0ded5f3367d825fc1a9f89475630f03718f0a9c2 = $this->env->getExtension("native_profiler");
        $__internal_c13b114759c3146c10bb37ae0ded5f3367d825fc1a9f89475630f03718f0a9c2->enter($__internal_c13b114759c3146c10bb37ae0ded5f3367d825fc1a9f89475630f03718f0a9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c13b114759c3146c10bb37ae0ded5f3367d825fc1a9f89475630f03718f0a9c2->leave($__internal_c13b114759c3146c10bb37ae0ded5f3367d825fc1a9f89475630f03718f0a9c2_prof);

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
