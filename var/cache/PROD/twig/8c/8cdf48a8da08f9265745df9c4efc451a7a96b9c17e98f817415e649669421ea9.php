<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_67f8ae05e90501592dfad35b33ec4665ff64c95a828c12786d85128d71f99920 extends Twig_Template
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
        $__internal_35ea722bd7df48e83aa012991d4df018775e4ae794b16ce00fc9f47eaea4e173 = $this->env->getExtension("native_profiler");
        $__internal_35ea722bd7df48e83aa012991d4df018775e4ae794b16ce00fc9f47eaea4e173->enter($__internal_35ea722bd7df48e83aa012991d4df018775e4ae794b16ce00fc9f47eaea4e173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_35ea722bd7df48e83aa012991d4df018775e4ae794b16ce00fc9f47eaea4e173->leave($__internal_35ea722bd7df48e83aa012991d4df018775e4ae794b16ce00fc9f47eaea4e173_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
