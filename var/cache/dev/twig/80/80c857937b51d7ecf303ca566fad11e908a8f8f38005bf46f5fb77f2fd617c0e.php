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
        $__internal_fc5b712cdfe909fb6f2372723694be095e8adfcbefd1219612d8327bbd098ed4 = $this->env->getExtension("native_profiler");
        $__internal_fc5b712cdfe909fb6f2372723694be095e8adfcbefd1219612d8327bbd098ed4->enter($__internal_fc5b712cdfe909fb6f2372723694be095e8adfcbefd1219612d8327bbd098ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_fc5b712cdfe909fb6f2372723694be095e8adfcbefd1219612d8327bbd098ed4->leave($__internal_fc5b712cdfe909fb6f2372723694be095e8adfcbefd1219612d8327bbd098ed4_prof);

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
