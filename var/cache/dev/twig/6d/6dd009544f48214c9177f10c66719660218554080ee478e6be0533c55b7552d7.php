<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0d154629b7e6c3acff3525d73e9dea390d46b45f0c68fa64c4809e64c011aa48 extends Twig_Template
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
        $__internal_09720fd86f185b4518644c86433230400fa43eeeecf08733de1e61e0bf2e0b86 = $this->env->getExtension("native_profiler");
        $__internal_09720fd86f185b4518644c86433230400fa43eeeecf08733de1e61e0bf2e0b86->enter($__internal_09720fd86f185b4518644c86433230400fa43eeeecf08733de1e61e0bf2e0b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_09720fd86f185b4518644c86433230400fa43eeeecf08733de1e61e0bf2e0b86->leave($__internal_09720fd86f185b4518644c86433230400fa43eeeecf08733de1e61e0bf2e0b86_prof);

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
