<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8062036dad44484c47a35bc97579f4a363c59cf5e0e83b6e8af395f7119bd5d3 extends Twig_Template
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
        $__internal_373ce826bcc488a1112b619bd35ba13ee9772f77fc4a8c7676a7dff75f9f5644 = $this->env->getExtension("native_profiler");
        $__internal_373ce826bcc488a1112b619bd35ba13ee9772f77fc4a8c7676a7dff75f9f5644->enter($__internal_373ce826bcc488a1112b619bd35ba13ee9772f77fc4a8c7676a7dff75f9f5644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_373ce826bcc488a1112b619bd35ba13ee9772f77fc4a8c7676a7dff75f9f5644->leave($__internal_373ce826bcc488a1112b619bd35ba13ee9772f77fc4a8c7676a7dff75f9f5644_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
