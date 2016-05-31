<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_54799df535f72cc8f929ddc2e02d83f304e7cd3dd79302d3d6ff4c44decd4aaf extends Twig_Template
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
        $__internal_177715da0f1dc7c853aa86c828749a1688f96b716e0b93a02279e4ca9fd858bf = $this->env->getExtension("native_profiler");
        $__internal_177715da0f1dc7c853aa86c828749a1688f96b716e0b93a02279e4ca9fd858bf->enter($__internal_177715da0f1dc7c853aa86c828749a1688f96b716e0b93a02279e4ca9fd858bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_177715da0f1dc7c853aa86c828749a1688f96b716e0b93a02279e4ca9fd858bf->leave($__internal_177715da0f1dc7c853aa86c828749a1688f96b716e0b93a02279e4ca9fd858bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
