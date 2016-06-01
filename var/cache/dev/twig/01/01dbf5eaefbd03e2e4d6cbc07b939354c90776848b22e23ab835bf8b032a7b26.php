<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_694610953f414b5b59d2431e9001bde0e38d436d53a03ab1c85fa9a4ab99d074 extends Twig_Template
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
        $__internal_dabe9f7ec799fa4014507660c97921bcc67a260e8c47d968a646ffe34d3e765b = $this->env->getExtension("native_profiler");
        $__internal_dabe9f7ec799fa4014507660c97921bcc67a260e8c47d968a646ffe34d3e765b->enter($__internal_dabe9f7ec799fa4014507660c97921bcc67a260e8c47d968a646ffe34d3e765b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_dabe9f7ec799fa4014507660c97921bcc67a260e8c47d968a646ffe34d3e765b->leave($__internal_dabe9f7ec799fa4014507660c97921bcc67a260e8c47d968a646ffe34d3e765b_prof);

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
