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
        $__internal_007fc3946251ab6056c2ee2d7402b675847b4edc22ae244679f6d72447a6f1d2 = $this->env->getExtension("native_profiler");
        $__internal_007fc3946251ab6056c2ee2d7402b675847b4edc22ae244679f6d72447a6f1d2->enter($__internal_007fc3946251ab6056c2ee2d7402b675847b4edc22ae244679f6d72447a6f1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_007fc3946251ab6056c2ee2d7402b675847b4edc22ae244679f6d72447a6f1d2->leave($__internal_007fc3946251ab6056c2ee2d7402b675847b4edc22ae244679f6d72447a6f1d2_prof);

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
