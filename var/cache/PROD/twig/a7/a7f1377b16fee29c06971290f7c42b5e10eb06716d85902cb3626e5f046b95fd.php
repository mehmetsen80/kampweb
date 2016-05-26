<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_46a4f31876b3daac39250f7b890847fa59e82a81c6064eaa5bd5a1d516080cd3 extends Twig_Template
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
        $__internal_04f2356cadf5d5f1e1fa63e87db40d303141262457dd7fc1466e62e6554dbbcc = $this->env->getExtension("native_profiler");
        $__internal_04f2356cadf5d5f1e1fa63e87db40d303141262457dd7fc1466e62e6554dbbcc->enter($__internal_04f2356cadf5d5f1e1fa63e87db40d303141262457dd7fc1466e62e6554dbbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_04f2356cadf5d5f1e1fa63e87db40d303141262457dd7fc1466e62e6554dbbcc->leave($__internal_04f2356cadf5d5f1e1fa63e87db40d303141262457dd7fc1466e62e6554dbbcc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
