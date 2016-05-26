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
        $__internal_d86629fcf02a7fe3fe168165f95cb495dcef69b7a141fecddc67b5bce85c7ce7 = $this->env->getExtension("native_profiler");
        $__internal_d86629fcf02a7fe3fe168165f95cb495dcef69b7a141fecddc67b5bce85c7ce7->enter($__internal_d86629fcf02a7fe3fe168165f95cb495dcef69b7a141fecddc67b5bce85c7ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d86629fcf02a7fe3fe168165f95cb495dcef69b7a141fecddc67b5bce85c7ce7->leave($__internal_d86629fcf02a7fe3fe168165f95cb495dcef69b7a141fecddc67b5bce85c7ce7_prof);

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
