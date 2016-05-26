<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_590dbe18a9928d2f2393a3a9406208fe7408ce3bcacefd88391231b81644aede extends Twig_Template
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
        $__internal_e854ec6d0ed2950ccddbde44f5bd111a95aa282ba68af13c285854ef38164428 = $this->env->getExtension("native_profiler");
        $__internal_e854ec6d0ed2950ccddbde44f5bd111a95aa282ba68af13c285854ef38164428->enter($__internal_e854ec6d0ed2950ccddbde44f5bd111a95aa282ba68af13c285854ef38164428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e854ec6d0ed2950ccddbde44f5bd111a95aa282ba68af13c285854ef38164428->leave($__internal_e854ec6d0ed2950ccddbde44f5bd111a95aa282ba68af13c285854ef38164428_prof);

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
