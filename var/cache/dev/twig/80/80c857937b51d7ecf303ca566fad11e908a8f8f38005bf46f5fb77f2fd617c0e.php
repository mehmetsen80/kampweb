<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ed021264701764b52d63bf0258c5fd2b1a913bf687e66aa8305030ee95b1008f extends Twig_Template
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
        $__internal_569e8a1b714e68cbe95e491c2a9d91a0c3fa7ef8d230aa88e178ce903e03472d = $this->env->getExtension("native_profiler");
        $__internal_569e8a1b714e68cbe95e491c2a9d91a0c3fa7ef8d230aa88e178ce903e03472d->enter($__internal_569e8a1b714e68cbe95e491c2a9d91a0c3fa7ef8d230aa88e178ce903e03472d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_569e8a1b714e68cbe95e491c2a9d91a0c3fa7ef8d230aa88e178ce903e03472d->leave($__internal_569e8a1b714e68cbe95e491c2a9d91a0c3fa7ef8d230aa88e178ce903e03472d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
